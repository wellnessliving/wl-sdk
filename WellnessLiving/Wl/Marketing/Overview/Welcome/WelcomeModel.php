<?php

namespace WellnessLiving\Wl\Marketing\Overview\Welcome;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint used to check if welcome screen should be shown.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 */
class WelcomeModel extends WlModelAbstract
{
  /**
   * The business key within which request is made.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Determines whether welcome screen should be shown.
   *
   * @get result
   * @var bool
   */
  public $show_welcome = false;
}

?>