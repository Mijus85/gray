<?php

namespace Drupal\premiership\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'Premiership Teams Block' block.
 *
 * @Block(
 *   id = "premiership_teams_block",
 *   admin_label = @Translation("Premiership Teams Block"),
 * )
 */
class PremiershipTeamsBlock extends BlockBase {

  public function build() {
    // Creates a Guzzle HTTP client instance.
    $client = new Client();
    try {
      // Makes a GET request to the SportMonks API to retrieve team data.
      $response = $client->get('https://api.sportmonks.com/v3/football/teams?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po');

      // Checks if the request was successful.
      if ($response->getStatusCode() == 200) {
        // Decodes the JSON response.
        $teams = json_decode($response->getBody()->getContents(), TRUE);
        // Renders the data using a custom Twig template.
        $render['team'] = [
          '#theme' => 'premiership_teams_block',
          '#teams' => $teams,
        ];

        return $render;
      }
      else {
        // Handles error when the API response is not successful.
      }
    }
    catch (RequestException $e) {
      // Handles Guzzle request exceptions, such as network errors.
    }

    // Returns a default response if something goes wrong.
    return [
      '#markup' => $this->t('Failed to retrieve team data.'),
    ];
  }
}
