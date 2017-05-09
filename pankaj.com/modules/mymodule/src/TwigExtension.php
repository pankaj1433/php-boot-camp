<?php
namespace Drupal\demo_module;
use Drupal\block\Entity\Block;
use Drupal\user\Entity\User;
use Drupal\node\Entity\Node;
 
/**
 * Class DefaultService.
 *
 * @package Drupal\demo_module
 */
class TwigExtension extends \Twig_Extension {
 
  /**
   * {@inheritdoc}
   * This function must return the name of the extension. It must be unique.
   */
  public function getName() {
    return 'block_display';
  }
 
  /**
   * In this function we can declare the extension function.
   */
  public function getFunctions() {
    return array(
      new \Twig_SimpleFunction('getImageAlt', array($this, 'getImageAlt'), array('is_safe' => array('html'))),
    );
  }
  /*
   * This function is used to return alt of an image
   * Set image title as alt.
   */
  public function getImageAlt($item) {
    $image_alt = NULL;
    if (method_exists($item, 'getEntity')) {
      $entity = $item->getEntity();
      $slide_image = $entity->get('field_image')->getValue();
      if ($slide_image) {
        if (isset($slide_image[0])) {
          $image = $slide_image[0];
          // set "item title" as alt.
          $item_value = $entity->get('field_item_title')->getValue();
          $image_alt = trim(strip_tags($item_value[0]['value']));
          if(!empty($image_alt)){
            return $image_alt;
          }
          else {
            $image_alt = $image['alt'];
            return $image_alt;
          }
        }
      }
    }
    return $image_alt;
  }
}