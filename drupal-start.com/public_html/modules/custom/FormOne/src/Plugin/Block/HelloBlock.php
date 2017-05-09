<?php

namespace Drupal\FormOne\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Thesaurus Related Block' block.
*
* @Block(
*   id = "thesaurus_related_block",
*   admin_label = @Translation("Thesaurus Related Block"),
*   category = @Translation("Custom Thesaurus Related Block")
* );
*/
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
  }

}