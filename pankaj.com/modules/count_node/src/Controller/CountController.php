<?php

/**
 * @file
 * this is contact file
 * */

namespace Drupal\count_node\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\Query\QueryFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CountController extends ControllerBase {

  protected $entityQuery;

  public function __construct(QueryFactory $entityQuery) {
    $this->entityQuery = $entityQuery;
  }

  public static function create(ContainerInterface $container) {

    return new static(
    $container->get('entity.query')
    );
  }
  
  public function content() {

      $query = $this->entityQuery->get('node');
      $query->condition('type', 'Mobiles');
      kint($query->condition('type', 'Mobiles'));
      $query->count();
      $count = $query->execute();
     
    return ['#markup' => 'Number of nodes of "mobiles" type : '.$count ];
    
  }

}
