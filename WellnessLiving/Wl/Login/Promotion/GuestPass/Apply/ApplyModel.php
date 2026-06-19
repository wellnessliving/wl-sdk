<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Apply;

use WellnessLiving\WlModelAbstract;

/**
 * Endpoint designed to pay for a visit with guest pass options attached to specific promotion.
 * If visit is paid already then old payment option will be revoked without penalties.
 */
class ApplyModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Login promotion key of the host member's class membership whose guest pass
   * balance will be used.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * Visit key of the attendee to whom the guest pass is applied.
   *
   * @post post
   * @var string
   */
  public $k_visit = '';
}

?>