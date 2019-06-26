<?php

namespace Drupal\sae_teams\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class sae_teamsController.
 */
class sae_teamsController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): $name'),
    ];
  }

}
