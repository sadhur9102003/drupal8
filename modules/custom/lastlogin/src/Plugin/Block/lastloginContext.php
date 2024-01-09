<?php

namespace Drupal\lastlogin\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a block that uses twig to render its content.
 *
 * @Block(
 *   id = "lastlogin",
 *   admin_label = @Translation("lastlogin guide to blocks: Context"),
 *   category = "lastlogin",
 *   context_definitions = {
 *     "user" = @ContextDefinition("entity:user", label = @Translation("User"))
 *   }
 * )
 */
class lastloginContext extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
      // Get the current user
      $user = \Drupal::currentUser();
  
      // Get the user ID
      $userId = $user->id();
  
      // Get last login timestamp
      $lastLogin = $this->getLastLogin($userId);
  
      // // Build the block content
      // $content = [
      //     '#markup' => $this->t('Lastsss Login: @last_login', ['@last_login' => $lastLogin]),
      // ];

      return [
        '#theme' => 'context_block2',
        '#name' => 'anon',
        // You can attach the css library here, by using the following structure:
        '#attached' => [
          'library' => [
            'lastlogin/csslib',
          ],
        ],
      ];
      

     
     
  
    }
    
  
    /**
     * Get the lastlogin timestamp for a user.
     *
     * @param int $userId
     *   The user ID.
     *
     * @return string
     *   The formatted lastlogin timestamp.
     */
    protected function getlastlogin($userId) {
      // You can implement your logic to retrieve lastlogin from the user object or database.
      // For simplicity, let's assume the user object itself contains the lastlogin timestamp.
      $user = \Drupal\user\Entity\User::load($userId);
      return \Drupal::service('date.formatter')->format($user->getlastloginTime(), 'custom', 'Y-m-d H:i:s');
    }
    
}
