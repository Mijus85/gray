<?php

namespace Drupal\premiership\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\State\StateInterface;
/**
 * Provides a 'Premiership Players Block' block.
 *
 * @Block(
 *   id = "premiership_players_block",
 *   admin_label = @Translation("Premiership Players Block"),
 * )
 */
class PremiershipPlayersBlock extends BlockBase {
  

  public function build() {
    // Creates a Guzzle HTTP client instance.
    $client = new Client();
    try {
      
      // Makes a GET request to the SportMonks API to retrieve player data.
      $response = $client->get('https://api.sportmonks.com/v3/football/players/countries/1161?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po&include=latest&order=asc&per_page=1');

      // Checks if the request was successful.
      if ($response->getStatusCode() == 200) {
        // Decodes the JSON response.
        $players = json_decode($response->getBody()->getContents(), TRUE);
        // Renders the data using a custom Twig template.
        
        $render['player'] = [
          '#theme' => 'premiership_players_block',
          '#players' => $players,
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
      '#markup' => $this->t('Failed to retrieve player data.'),
    ];
  }
}
