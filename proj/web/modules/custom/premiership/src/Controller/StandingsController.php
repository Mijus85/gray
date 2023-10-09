<?php

namespace Drupal\premiership\Controller;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class StandingsController extends ControllerBase {

  public function getSeasonId() {
    // Fetch the season ID from the API.
    $client = new Client();

    try {
      // GET request to the SportMonks API to retrieve season data.
      $response = $client->get("https://api.sportmonks.com/v3/football/seasons/{ID}?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po");

      // Check if the request was successful.
      if ($response->getStatusCode() == 200) {
        // Decode the JSON response.
        $seasonData = json_decode($response->getBody()->getContents(), TRUE);
        // Extract the season ID from the response.
        $season_id = isset($seasonData['id']) ? (int) $seasonData['id'] : NULL;

        if (!empty($season_id)) {
          // Store the season ID in configuration.
          \Drupal::configFactory()->getEditable('standings.settings')
            ->set('season_id', $season_id)
            ->save();
        }
      }
    }
    catch (RequestException $e) {
      // Handle Guzzle request exceptions, such as network errors.
      // You can log the error or return an error message here.
    }

    // Redirect to the standings page after getting the season ID.
    return $this->redirect('premiership.standings_page', ['season_id' => $season_id]);
  }

  public function standingsPage($season_id) {
    // Make a GET request to retrieve standings data using $season_id.
    $client = new Client();

    try {
      // GET request to the SportMonks API to retrieve standings data using $season_id.
      $response = $client->get("https://api.sportmonks.com/v3/football/standings/seasons/{$season_id}?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po&include=participant;details.type&filters=standingdetailTypes:129,179;season&filters=standingSeasons:21787;");

      // Check if the request was successful.
      if ($response->getStatusCode() == 200) {
        // Decode the JSON response.
        $standings = json_decode($response->getBody()->getContents(), TRUE);
        
        foreach ($standings['data'] as $k => $v) {
          foreach ($v['details'] as $value) {
          if ($value['type']['name'] == 'Overall Matched Played' || $value['type']['name'] == 'Goal Difference') {
            $gg[$value['type']['developer_name']] = $value;
          }
        }
      }
        // Render the standings data using a custom Twig template.
        $render['standing'] = [
          '#theme' => 'standings_page',
          '#standings' => $standings,
          '#gg' => $gg,
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

    // Return a response for the standings page.
    // This is just a placeholder; you should replace it with the actual rendering logic.
    return [
      '#markup' => $this->t('Standings Page'),
    ];
  }
}
