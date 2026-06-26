<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Creates new `Nuvei` transaction.
 *
 * @deprecated Use {@link NuveiOpenOrderModel} instead.
 *
 * @method WlModelRequest post()
 */
class NuveiTransactionStartModel extends WlModelAbstract
{
  /**
   * Credit card data.
   *
   * Contents of the payment source as it presents on the payment form.
   *
   * Supplied in case payment source is card.
   * `null` if payment source is other than card or payment is initialized before card data is known.
   *
   * <dl>
   *   <dt>array `a_pay_address`</dt>
   *   <dd>
   *     Payment address for address edit widget.
   *     <dl>
   *       <dt>bool `is_new`</dt>
   *       <dd>`true` if user has chosen to add new address, `false` otherwise.</dd>
   * 
   *       <dt>string `k_geo_country`</dt>
   *       <dd>Key of the country. Required for newly added billing address.</dd>
   * 
   *       <dt>string `k_geo_region`</dt>
   *       <dd>Key of the region. Required for newly added billing address.</dd>
   * 
   *       <dt>string `s_street1`</dt>
   *       <dd>First address line. Required for newly added billing address.</dd>
   * 
   *       <dt>string `s_street2`</dt>
   *       <dd>Second address line. Required for newly added billing address.</dd>
   * 
   *       <dt>string `s_city`</dt>
   *       <dd>City name. Required for newly added billing address.</dd>
   * 
   *       <dt>string `s_phone`</dt>
   *       <dd>Phone number. Required for newly added billing address.</dd>
   * 
   *       <dt>string `s_postal`</dt>
   *       <dd>Postal code. Required for newly added billing address.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_csc`</dt>
   *   <dd>Card CSC code. Required for newly added card.</dd>
   * 
   *   <dt>int `i_month`</dt>
   *   <dd>Card expiration month. Required for newly added card.</dd>
   * 
   *   <dt>int `i_year`</dt>
   *   <dd>Card expiration year. Required for newly added card.</dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd>If the card should be made the default payment method. Required for newly added card.</dd>
   * 
   *   <dt>bool `is_new`</dt>
   *   <dd>Whenever card is new.</dd>
   * 
   *   <dt>bool `is_save`</dt>
   *   <dd>If the card information should be saved for future transactions. Required for newly added card.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>Key of existing payment source in case of editing.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Card nickname. Required for newly added card.</dd>
   * 
   *   <dt>string `s_number`</dt>
   *   <dd>Card number. Required for newly added card.</dd>
   * </dl>
   * @post post
   * @var array|null
   */
  public $a_card = null;

  /**
   * Credit card type.
   * `null` in case card type can not be determined.
   *
   * @post result
   * @var CardTypeEnum|null
   */
  public $id_card_type = null;

  /**
   * ID of the currency.
   *
   * One of {@link CurrencySid} constants.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_currency = null;

  /**
   * ID of the actor.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_pay_actor = null;

  /**
   * ID of pay method.
   *
   * One of {@link WlPayMethodSid} constants.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_pay_method = null;

  /**
   * Whether authorization or capture should be performed.
   *
   * `true` (or anything that is not empty) to perform authorization.
   *
   * `false` (or anything that is empty, or do not pass this value) to charge the payment amount.
   *
   * @post post
   * @var bool
   */
  public $is_authorize = false;

  /**
   * Whether the card information should be saved for future transactions.
   *
   * @post post
   * @var bool
   */
  public $is_save = false;

  /**
   * Key of the business which receives the payment.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of the business merchant that should be used to perform the request.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business_merchant = null;

  /**
   * Key of a custom payment method.
   *
   * `null` in case when not initialized yet or empty if payment is performed with a standard payment method.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_method = null;

  /**
   * Key of payment transaction that was created.
   *
   * `null` in case when not initialized yet.
   *
   * @post result
   * @var string|null
   */
  public $k_pay_transaction = null;

  /**
   * Payment amount.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $m_amount = null;

  /**
   * Surcharge amount.
   *
   * `null` in case when not initialized yet, empty string or null for zero surcharge amount.
   *
   * @post post
   * @var string|null
   */
  public $m_surcharge = null;

  /**
   * Error message.
   *
   * `null` in case response has not received yet or request is not failed.
   *
   * @post result
   * @var string|null
   */
  public $text_message = null;

  /**
   * Payment owner user key.
   *
   * `null` in case when not initialized yet or if pay owner is anonymous.
   *
   * @post post
   * @var string|null
   */
  public $uid_purchase = null;
}

?>