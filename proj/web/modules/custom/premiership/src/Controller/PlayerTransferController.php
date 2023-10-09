<?php

namespace Drupal\premiership\Controller;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class PlayerTransferController extends ControllerBase { 

    public function transferPage() {
    // Make a GET request to retrieve the player transfers.
    // Create a new Guzzle HTTP client instance.
    $client = new Client();

    try {
      // GET request to the SportMonks API to retrieve the player transfers.
      $response = $client->get("https://api.sportmonks.com/v3/football/transfers?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po&include=player;type;fromTeam;toTeam;position;detailedPosition");

      /* https://api.sportmonks.com/v3/football/transfers/21787?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po&include=player;fromTeam;toTeam;position;detailedPosition;
      this gets us the Scotish Premiership transfers for this season.Season number is 21787 */
      // Check if the request was successful.
      if ($response->getStatusCode() == 200) {
        // Decodes the JSON response.
        $transfers = json_decode($response->getBody()->getContents(), TRUE);

        // Render the player transfers using a custom Twig template.
        $render['transfer'] = [
          '#theme' => 'transfers_page',
          '#transfers' => $transfers["data"],
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

    // Return a response for the player transfers page.
    return [
      '#markup' => $this->t('Player Transfer Page'),
    ];
  }
}
