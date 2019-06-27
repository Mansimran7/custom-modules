<?php

namespace Drupal\international_transfer_program\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class itpController.
 */
class itpController extends ControllerBase {

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
