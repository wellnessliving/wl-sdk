<?php

namespace WellnessLiving\Wl\Business\Franchise\Push;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to perform push for a specified module.
 *
 * @method WlModelRequest post() Performs validation of pushed data and schedules push tasks.
 */
class ModuleSetupModel extends WlModelAbstract
{
  /**
   * Data for loading public variables of push module.
   *
   * @post post
   * @var array
   */
  public $a_data = [];

  /**
   * Locations in which it is necessary to push an item.
   *
   * @post post
   * @var string[]
   */
  public $a_location = [];

  /**
   * CID of the module to push.
   *
   * @post get
   * @var int
   */
  public $cid_module = 0;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>