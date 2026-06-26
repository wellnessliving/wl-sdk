<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to get subscription status.
 *
 * @method WlModelRequest get()
 */
class PriceOverrideModel extends WlModelAbstract
{
  /**
   * List of override options.
   *
   * @get result
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
   * Whether override is active.
   *
   * @get result
   * @var bool
   */
  public $has_override;

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