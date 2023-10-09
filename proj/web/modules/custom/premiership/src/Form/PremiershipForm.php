<?php

namespace Drupal\premiership\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PremiershipForm extends Formbase {
    
    public function getFormId() {
        return 'premiership_my_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        //Define form state elements.
        // An input field for the authentication token.
        $form['authentication_token'] = [
            '#type' => 'textfield',
            '#title'=> $this->t('Authentication Token'),
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
        ];

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        // Implement validation logic if needed.
      }
    
      public function submitForm(array &$form, FormStateInterface $form_state) {
        // Handle form submission here.
        $authentication_token = $form_state->getValue('authentication_token');
        // Store the token using the State API if necessary.
        \Drupal::state()->set('premiership_authentication_token', $authentication_token);
      }
    }



    // Retrieving the authentication token from the State API.
    // $authentication_token = \Drupal::state()->get('premiership_authentication_token');
