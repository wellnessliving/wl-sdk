<?php

namespace WellnessLiving\Wl\Insurance\Profile;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Login\Promotion\PromotionPayPauseModel;

/**
 * Manages promotion pause.
 *
 * @see PromotionPayPauseModel
 *
 * @method WlModelRequest delete() Stops (if start date is yesterday or earlier) or removes (if start date is today) currently active promotion payment pause.
 * @method WlModelRequest post() Adds promotion payment pause with default settings, thus putting membership on hold.
 */
class InsuranceHoldModel extends WlModelAbstract
{
  /**
   * Key of business to which currently handled login promotion belongs.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of login promotion to cancel.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * Key of created promotion pause;
   *
   * @post result
   * @var string
   */
  public $k_promotion_pay_pause;
}

?>