<?php

namespace WellnessLiving\Wl\Import\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Check business import status.
 *
 * **Important!**
 * **This api used by foreign desktop application.**/
class CheckModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';
}

?>