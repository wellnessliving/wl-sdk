<?php

namespace WellnessLiving\Thoth\PayHardware;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to save staff preferred terminal reader.
 *
 * @method WlModelRequest post()
 */
class HardwareStaffPreferenceModel extends WlModelAbstract
{
  /**
   * Terminal type.
   * `null` in case when not initialized yet or when `k_terminal` is set.
   *
   * @post post
   * @var string|null
   */
  public $id_type = null;

  /**
   * Key of business to save preferred terminal.
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of the location to save preferred terminal.
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * Terminal key.
   * `null` in case when not initialized yet or when `id_type` is set.
   *
   * @post post
   * @var string|null
   */
  public $k_terminal = null;
}

?>