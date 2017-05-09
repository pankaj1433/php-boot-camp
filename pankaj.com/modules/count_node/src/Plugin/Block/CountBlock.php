<?php
/**
 * @file
 * Contains \Drupal\count_node\Plugin\Block\MyBlock .
 */

namespace Drupal\count_node\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides the  Block 'MyBlock'.
 *
 * @Block(
 *   id = "count_node_countblock",
 *   subject = @Translation("CountBlock"),
 *   admin_label = @Translation("CountBlock")
 * )
 */
class CountBlock extends BlockBase {

  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {

    return ['#markup' => 'this is programatically created count block ' ];

  }
}