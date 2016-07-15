<?php
namespace Drupal\appno_api\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class ApiForm extends FormBase {
  public function getFormId() {
    return 'apiform';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['api_key'] = array(
      '#type' => 'textfield',
      '#title' => 'API Key',
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

  }
}
