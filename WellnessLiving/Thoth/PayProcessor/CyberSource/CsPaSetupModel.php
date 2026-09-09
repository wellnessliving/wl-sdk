<?php

namespace WellnessLiving\Thoth\PayProcessor\CyberSource;

use WellnessLiving\Thoth\WlPay\Bank\Card\CardTypeEnum;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsPayActorSid;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Allows to perform Payer Authentication Setup request.
 *
 * @method WlModelRequest post() Starts `CyberSource` Payer Authentication setup.  Validates the payment request and card data, starts a payment transaction, and requests  `CyberSource` to set up payer authentication, returning the JWT and device collection URL  needed to continue the flow.
 */
class CsPaSetupModel extends WlModelAbstract
{
  /**
   * Credit card data.
   *
   * Contents of the payment source as it presents on the payment form.
   *
   * <dl>
   *   <dt>array `a_pay_address`</dt>
   *   <dd>
   *     Payment address for address edit widget. Used only if `is_new` is `true`:
   *     <dl>
   *       <dt>bool `is_new`</dt>
   *       <dd>`true` if user has chosen to add new address, `false` otherwise.</dd>
   * 
   *       <dt>string `k_geo_country`</dt>
   *       <dd>Key of the country.  Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `k_geo_region`</dt>
   *       <dd>Key of the region.  Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string|null `k_pay_address`</dt>
   *       <dd>
   *         Chosen payment address key. 
   * Set even if user decided to add new address.
   *       </dd>
   * 
   *       <dt>string `s_city`</dt>
   *       <dd>City name. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `s_name`</dt>
   *       <dd>User's full name.</dd>
   * 
   *       <dt>string `s_phone`</dt>
   *       <dd>Phone number. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `s_postal`</dt>
   *       <dd>Postal code. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `s_street1`</dt>
   *       <dd>First address line. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string `s_street2`</dt>
   *       <dd>Second address line. Used only if `is_new` is `true`.</dd>
   * 
   *       <dt>string|null `text_mail`</dt>
   *       <dd>User's email. `null` if not specified. Used only if `is_new` is `true`.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_csc`</dt>
   *   <dd>Card CSC code. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>int `i_month`</dt>
   *   <dd>Card expiration month. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>int `i_year`</dt>
   *   <dd>Card expiration year. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>int `id_card_type`</dt>
   *   <dd>
   *     Card type. One of {@link CardTypeEnum} constants as int. Used only if `is_new` is `true`.
   *   </dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd>If the card should be made the default payment method. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>bool `is_new`</dt>
   *   <dd>Whether a new card is being added instead of an existing one being selected.</dd>
   * 
   *   <dt>bool `is_save`</dt>
   *   <dd>If the card information should be saved for future transactions. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>Selected payment card key. Used only if `is_new` is `false`. `0` if no existing card is selected.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Card nickname. Used only if `is_new` is `true`.</dd>
   * 
   *   <dt>string `s_number`</dt>
   *   <dd>Card number. Used only if `is_new` is `true`.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_card;

  /**
   * ID of the actor.
   *
   * @post post
   * @var int
   * @see RsPayActorSid
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