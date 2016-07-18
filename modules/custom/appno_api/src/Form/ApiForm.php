<?php
namespace Drupal\appno_api\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class ApiForm extends FormBase {
  public function getFormId() {
    return 'apiform';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $api_key = \Drupal::state()->get('appno_api_key');

    $form['api_key'] = array(
      '#type' => 'textfield',
      '#title' => 'API Key',
      '#default_value' => $api_key,
    );

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Save',
    );

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    \Drupal::state()->set('appno_api_key', $values['api_key']);
    drupal_set_message('Your API key was saved.');
  }
}
