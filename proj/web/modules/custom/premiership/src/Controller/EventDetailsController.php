<?php

namespace Drupal\premiership\Controller;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class EventDetailsController extends ControllerBase {

  public function eventPage() {
    // Retrieve the selected event ID from configuration.
    $event_id = \Drupal::config('event.settings')->get('id');

    if (!$event_id) {
      // If it's not in configuration, retrieve it from the API.
      // Create a Guzzle HTTP client instance.
      $client = new Client();

      try {
        // GET request to the SportMonks API to retrieve event data.
        $response = $client->get('https://api.sportmonks.com/v3/football/fixtures/{ID}api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po');

        // Checks if the request was successful.
        if ($response->getStatusCode() == 200) {
          // Decodes the JSON response.
          $details = json_decode($response->getBody()->getContents(), TRUE);

          // Assuming the first event in the response is the one you want.
          if (!empty($details) && isset($details[0]['id'])) {
            $event_id = $details[0]['id'];

            // Store the event ID in configuration.
            \Drupal::configFactory()->getEditable('event.settings')
              ->set('event_id', $event_id)
              ->save();
          }
        }
      }
      catch (RequestException $e) {
        // Handle Guzzle request exceptions, such as network errors.
        // You can log the error or return an error message here.
      }
    }

    // You can return a response for the eventPage here.
    // This is just a placeholder; you should replace it with the actual rendering logic.
    return [
      '#markup' => $this->t('Event Page'),
    ];
  }

  public function eventDetailsPage($event_id) {
    // Make a GET request to retrieve event details using $event_id.
    // Create a new Guzzle HTTP client instance.
    $client = new Client();

    try {
      // GET request to the SportMonks API to retrieve event details using $event_id.
      $response = $client->get("https://api.sportmonks.com/v3/football/fixtures/{$event_id}?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po&include=odds:label,market_description,probability;venue:name,address;weatherreport;");

      // Check if the request was successful.
      if ($response->getStatusCode() == 200) {
        // Decodes the JSON response.
        $event_details = json_decode($response->getBody()->getContents(), TRUE);
        // Render the event details using a custom Twig template.

        foreach ($event_details['data']['odds'] as $k => $v) {
            if ($v['market_description'] == 'Full Time Result') {
              $odds[] = $v;
          }
        }
   
        
/*         dpm($event_details);
 */        $render['event'] = [
            '#theme' => 'event_details_page',
            '#event_details' => $event_details,
            '#odds' => $odds,
            '#venues' => $event_details['data']['venue'],
            '#weatherreport' => $event_details['data']['weatherreport'],
          ];
            return $render;


      }
      else {
        // Handle the error when the API response is not successful.
        // You can return an error message or take appropriate action here.
      }
    }
    catch (RequestException $e) {
      // Handle Guzzle request exceptions, such as network errors.
      // You can log the error or return an error message here.
    }

    // Return a response for the event details page.
    return [
      '#markup' => $this->t('Event Details Page'),
    ];
  }
}
