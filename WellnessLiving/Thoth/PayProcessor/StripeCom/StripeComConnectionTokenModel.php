<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get a secret from a connection token for SDK.
 *
 * @link Thoth/PayProcessor/StripeCom/doc/stripe-terminal.md
 *
 * @method WlModelRequest post()
 */
class StripeComConnectionTokenModel extends WlModelAbstract
{
  /**
   * ID of the currency.
   *
   * One of {@link CurrencySid} constants.
   *
   * @post post
   * @var int
   */
  public $id_currency;

  /**
   * ID of the actor.
   *
   * @post post
   * @var int
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
   * Location key that this connection token is scoped to.
   *
   * If you provide a location, the connection token is only usable with smart readers assigned to that location.
   * If you do not provide a location, the connection token is usable with all readers.
   * For Bluetooth readers, the location of a connection token has no effect.
   * This ensures that Bluetooth readers near you are always discoverable.
   *
   * `null` if the connection token should be usable with all readers.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * Connection token secret key.
   *
   * @post result
   * @var string
   */
  public $s_secret;

  /**
   * Payment owner user key.
   *
   * @post post
   * @var string
   */
  public $uid_purchase;
}

?>