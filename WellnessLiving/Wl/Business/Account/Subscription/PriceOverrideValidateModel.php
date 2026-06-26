<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to validate override options.
 *
 * @method WlModelRequest get()
 */
class PriceOverrideValidateModel extends WlModelAbstract
{
  /**
   * List of override options.
   *
   * @get get
   * @var array
   */
  public $a_override;

  /**
   * Subscription statuses.
   *
   * @get get
   * @var int
   */
  public $cid_subscription;

  /**
   * Periodicity of payments.
   *
   * @get get
   * @var int
   */
  public $id_periodicity;

  /**
   * Plan ID.
   *
   * @get get
   * @var int
   */
  public $id_plan;

  /**
   * @get get
   * @var string
   */
  public $k_business;
}

?>