<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\FormOne\Form;



use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\CssCommand;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;

class MyFormOne extends ConfigFormBase{
  
  protected $config;
  
  public function __construct(ConfigFactoryInterface $config_factory) {
    $this->config = $config_factory;
  }
  
  
  
  public static function create(ContainerInterface $container) {
    return new static(
        $container->get('config.factory')
    );
  }

 
  public function getFormId() {
    return 'FormOne';
  }
  
  
  public function getEditableConfigNames(){
    return ['myform.settings'];
  }

  
  public function buildForm(array $form, FormStateInterface $form_state) {
    
    $form['actions'] = ['#type' => 'actions'];
    
    $form['actions']['changetext'] = [
      '#type' => 'button',
      '#value' => $this->t('Add Name'),
      '#ajax' => [
          'callback' => '::MyButtonAjax',
          'event' => 'click',
        ],
    ];    
    $form['color'] = [
      '#type' => 'color',
      '#title' => $this->t('Change Name Color'),
      '#default_value' => '#000000',
      '#prefix' => '<h3 id="msg">Enter Your Name</h3>',
      '#ajax' => [
          'callback' => '::MyColorAjax',
          'event' => 'change',
        ],
    ];
    $form['mycontainer'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => 'mycontainer',
      ],
      '#states' => [
        'invisible' => [
          'input[name="displaycontainer"]' => ['checked' => FALSE],
        ],
      ],
    ]; 
    $form['displaycontainer'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Display Name Container'),
      '#default_value' => TRUE,
    ];
    $form['mycontainer']['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your Name'),
    ];

    return $form;
  }
    
    function MyButtonAjax($form, FormStateInterface $form_state) {
      $name=$form_state->getValue('name');
      $ajax_response = new AjaxResponse();
        $text = 'Pankaj Malhotra';
      $ajax_response->addCommand(new HtmlCommand('#msg', $name));
      return $ajax_response;
    }
    function MyColorAjax($form, FormStateInterface $form_state) {
      $color=$form_state->getValue('color');
      $css = ['color' => $color];
      $ajax_response = new AjaxResponse();
      $ajax_response->addCommand(new CssCommand('#msg', $css));
      return $ajax_response;
    }
}
