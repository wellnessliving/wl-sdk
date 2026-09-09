<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsPayActorSid;

/**
 * Get Stripe public key for a merchant.
 *
 * @method WlModelRequest post() Gets the `Stripe` public key for a merchant.  Returns the publishable key configured for the business merchant, so it can be used by the  frontend to initialize `Stripe` payment elements.
 */
class StripeComKeyModel extends WlModelAbstract
{
  /**
   * ID of the actor.
   *
   * @post post
   * @var int
   * @see RsPayActorSid
   */
  public $id_pay_actor;

  /**
   * Key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Key of the business merchant to get the public key for.
   *
   * @post post
   * @var string
   */
  public $k_business_merchant;

  /**
   * Merchant public key.
   *
   * `null` before the key is set.
   *
   * @post result
   * @var string|null
   */
  public $s_public = null;

  /**
   * Payment owner user key.
   *
   * @post post
   * @var string
   */
  public $uid_purchase;
}

?>