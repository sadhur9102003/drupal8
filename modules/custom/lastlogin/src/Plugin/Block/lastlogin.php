<?php

namespace Drupal\lastlogin\Plugin\Block;

use Drupal\Core\Block\BlockBase;
  
/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "lastlogin",
 *   admin_label = @Translation("lastlogin"),
 *   category = "lastlogin"
 * )
 */
class lastlogin extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => 'This is a simple block that displays some text!',
    ];
  }

}
