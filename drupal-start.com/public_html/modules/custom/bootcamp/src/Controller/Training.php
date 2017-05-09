<?php
/**
 * @file
 * this is hello world module
 **/

namespace Drupal\bootcamp\Controller;

use Drupal\Core\Controller\ControllerBase;

class Training extends ControllerBase{
  
  
  public function content(){
    
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World')
    );
  }
  
}

