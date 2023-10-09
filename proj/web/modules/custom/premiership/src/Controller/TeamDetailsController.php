<?php

namespace Drupal\premiership\Controller;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class TeamDetailsController extends ControllerBase {

  public function teamPage() {
    // Retrieve the selected team ID from configuration.
    $team_id = \Drupal::config('premiership.settings')->get('team_id');

    if (!$team_id) {
      // If it's not in configuration, retrieve it from the API.
      // Create a Guzzle HTTP client instance.
      $client = new Client();

      try {
        // GET request to the SportMonks API to retrieve team data.
        $response = $client->get('https://api.sportmonks.com/v3/football/teams/{ID}?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po');

        // Checks if the request was successful.
        if ($response->getStatusCode() == 200) {
          // Decodes the JSON response.
          $details = json_decode($response->getBody()->getContents(), TRUE);

          // Assuming the first team in the response is the one you want.
          if (!empty($details) && isset($details[0]['id'])) {
            $team_id = $details[0]['id'];

            // Store the team ID in configuration.
            \Drupal::configFactory()->getEditable('premiership.settings')
              ->set('team_id', $team_id)
              ->save();
          }
        }
      }
      catch (RequestException $e) {
        // Handle Guzzle request exceptions, such as network errors.
        // You can log the error or return an error message here.
      }
    }

    // You can return a response for the teamPage here.
    // This is just a placeholder; you should replace it with the actual rendering logic.
    return [
      '#markup' => $this->t('Team Page'),
    ];
  }

  public function teamDetailsPage($team_id) {
    // Make a GET request to retrieve team details using $team_id.
    // Create a new Guzzle HTTP client instance.
    $client = new Client();

    try {
      // GET request to the SportMonks API to retrieve team details using $team_id.
      $response = $client->get("https://api.sportmonks.com/v3/football/teams/{$team_id}?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po");

      // Check if the request was successful.
      if ($response->getStatusCode() == 200) {
        // Decodes the JSON response.
        $team_details = json_decode($response->getBody()->getContents(), TRUE);
        // Render the team details using a custom Twig template.
        $render['team'] = [
          '#theme' => 'team_details_page',
          '#team_details' => $team_details['data'],
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

    // Return a response for the team details page.
    // This is just a placeholder; you should replace it with the actual rendering logic.
    return [
      '#markup' => $this->t('Team Details Page'),
    ];
  }
}
