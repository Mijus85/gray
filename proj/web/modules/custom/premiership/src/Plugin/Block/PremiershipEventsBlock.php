<?php

namespace Drupal\premiership\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'Premiership Events' block.
 *
 * @Block(
 *   id = "premiership_events_block",
 *   admin_label = @Translation("Premiership Events Block"),
 * )
 */
class PremiershipEventsBlock extends BlockBase {

    public function build() {
        // Create a Guzzle HTTP client instance.
        $client = new Client();
        
        try {
          // Make a GET request to the SportMonks API to retrieve event data.
          $response = $client->get('https://api.sportmonks.com/v3/football/fixtures/between/2023-09-13/2023-12-01?api_token=gtkVqK0WxpbobELAS1r3Fl5Wv8Ml5YB6thbs11qQ7jrVulQ0IiMCZtmkP9po');
          // Check if the request was successful.
          if ($response->getStatusCode() == 200) {
            // Decodes the JSON response.
            $events = json_decode($response->getBody()->getContents(), TRUE);
          
      
            // Pass the categorized events to the Twig template.
           $render['event'] = [
              '#theme' => 'premiership_events_block',
              '#events' => $events,
            ];
            return $render;
          }
          else {
            // Handle error when the API response is not successful.
          }
        }
        catch (RequestException $e) {
          // Handle Guzzle request exceptions, such as network errors.
        }
      
        // Return a default response if something goes wrong.
        return [
          '#markup' => $this->t('Failed to retrieve event data.'),
        ];
      }

      
      
}
