<?php

namespace WellnessLiving\Thoth\PayProcessor\CyberSource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Allows to perform Payer Authentication Setup request.
 *
 * @method WlModelRequest post()
 */
class CsPaSetupModel extends WlModelAbstract
{
  /**
   * Credit card data.
   *
   * Contents of the payment source as it presents on the payment form.
   *
   * @post post
   * @var array
   */
  public $a_card;

  /**
   * ID of the actor.
   *
   * @post post
   * @var int
   */
  public $id_pay_actor;

  /**
   * Whether authorization or capture should be performed.
   *
   * `true` (or anything that is not empty) to perform authorization and void immediately.
   *
   * `false` (or anything that is empty, or do not pass this value) to capture the payment amount.
   *
   * @post post
   * @var bool
   */
  public $is_authorize = false;

  /**
   * Key of the business which receives the payment.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Key of the business merchant that should be used to perform the request.
   *
   * @post post
   * @var string
   */
  public $k_business_merchant;

  /**
   * Key of a custom payment method.
   *
   * `null` or an empty string if payment is performed with a standard payment method.
   *
   * Only payment methods based on {@link WlPayMethodSid::ECOMMERCE} are accepted.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_method;

  /**
   * Key of payment transaction that was created.
   *
   * @post result
   * @var string
   */
  public $k_pay_transaction;

  /**
   * Payment amount.
   *
   * @post post
   * @var string
   */
  public $m_amount;

  /**
   * Surcharge amount.
   *
   * Empty string or null for zero surcharge amount.
   *
   * @post post
   * @var string
   */
  public $m_surcharge;

  /**
   * JWT token, as returned by Cyber Source.
   *
   * @post result
   * @var string
   */
  public $s_jwt;

  /**
   * Reference ID, as returned by Cyber Source.
   *
   * @post result
   * @var string
   */
  public $s_reference;

  /**
   * UID of the payment owner.
   *
   * @post post
   * @var string
   */
  public $uid_pay_owner;

  /**
   * Device collection URL, as returned by Cyber Source.
   *
   * @post result
   * @var string
   */
  public $url_collection;
}

?>