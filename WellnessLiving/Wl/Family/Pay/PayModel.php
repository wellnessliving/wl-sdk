<?php

namespace WellnessLiving\Wl\Family\Pay;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get and set data about "who pays for who".
 *
 * @method WlModelRequest get() Gets data about who pays for a given user.
 * @method WlModelRequest post() Sets that user {@link \Wl\Family\Pay\PayApi::$uid_payer} pays for user {@link \Wl\Family\Pay\PayApi::$uid}.
 */
class PayModel extends WlModelAbstract
{
  /**
   * ID of business to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * ID of user to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid;

  /**
   * ID of user who will pay for user {@link PayModel::$uid}.
   *
   * Empty if {@link PayModel::$uid} will pay for self.
   *
   * @get result
   * @post post
   * @var string
   */
  public $uid_payer;
}

?>