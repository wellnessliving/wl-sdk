<?php

namespace WellnessLiving\Thoth\WlPay\Bank\Ach\Add;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * Entry point to save ACH pay method.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is {@link BusinessPaymentCaptcha::CID}.
 *
 * @method WlModelRequest delete() Deletes saved ACH.
 * @method WlModelRequest get() Gets widget for ACH account add.
 * @method WlModelRequest post() Saves new ACH pay method.
 */
class AddModel extends WlModelAbstract
{
  /**
   * Array with ACH details from ACH widget.
   *
   * <dl>
   *   <dt>array `a_pay_address`</dt>
   *   <dd>
   *     Payment address for {@link \RsPayAddressSelectWidget} address edit widget:
   *     <dl>
   *       <dt>bool `is_new`</dt>
   *       <dd><tt>true</tt> - add new address; <tt>false</tt> - use existing address.</dd>
   * 
   *       <dt>string `k_geo_country`</dt>
   *       <dd>Country ID.</dd>
   * 
   *       <dt>string `k_geo_region`</dt>
   *       <dd>Region ID.</dd>
   * 
   *       <dt>string `k_pay_address`</dt>
   *       <dd>Chosen payment address ID. It will be set even if user decided to add new address.</dd>
   * 
   *       <dt>string `s_city`</dt>
   *       <dd>City name.</dd>
   * 
   *       <dt>string `s_name`</dt>
   *       <dd>User name.</dd>
   * 
   *       <dt>string `s_phone`</dt>
   *       <dd>Phone number.</dd>
   * 
   *       <dt>string `s_postal`</dt>
   *       <dd>Postal code.</dd>
   * 
   *       <dt>string `s_street1`</dt>
   *       <dd>First address line.</dd>
   * 
   *       <dt>string `s_street2`</dt>
   *       <dd>Second address line.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_pay_actor`</dt>
   *   <dd>Pay actor id.</dd>
   * 
   *   <dt>int `id_pay_bank_ach_holder`</dt>
   *   <dd>Account holder type.</dd>
   * 
   *   <dt>int `id_pay_bank_ach_sec`</dt>
   *   <dd>SEC code.</dd>
   * 
   *   <dt>int `id_pay_bank_ach_type`</dt>
   *   <dd>Account type.</dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd><tt>true</tt> - if a payment method is set as default, <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>
   *     Key of existing payment source in case of editing.
   * Empty if new pay source is being added.
   *   </dd>
   * 
   *   <dt>string `s_aban`</dt>
   *   <dd>ABA number.</dd>
   * 
   *   <dt>string `s_account`</dt>
   *   <dd>Account number.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Bank account nickname.</dd>
   * 
   *   <dt>string `s_number`</dt>
   *   <dd>Part of bank account number.</dd>
   * 
   *   <dt>string `s_owner`</dt>
   *   <dd>Name of bank account owner.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_card_detail = [];

  /**
   * ACH account information:
   *
   * <dl>
   *   <dt>bool `can_remove`</dt>
   *   <dd>
   *     Whether current user can remove payment method.
   * `true` if user can remove payment methods.
   * `false` if user cannot remove payment methods.
   *   </dd>
   * 
   *   <dt>int `id_pay_bank`</dt>
   *   <dd>Type of recurrent payment token.</dd>
   * 
   *   <dt>int `id_pay_bank_ach_holder`</dt>
   *   <dd>Type of account holder.</dd>
   * 
   *   <dt>int `id_pay_bank_ach_type`</dt>
   *   <dd>Type of account.</dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd>`true` - this account is default payment method; `false` - otherwise.</dd>
   * 
   *   <dt>string `k_pay_address`</dt>
   *   <dd>Billing address.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>ID of bank account.</dd>
   * 
   *   <dt>string `k_region`</dt>
   *   <dd>Region ID.</dd>
   * 
   *   <dt>string `text_city`</dt>
   *   <dd>Name of city.</dd>
   * 
   *   <dt>string `text_country`</dt>
   *   <dd>Name of country.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Account nickname.</dd>
   * 
   *   <dt>string `text_name_account`</dt>
   *   <dd>Account name.</dd>
   * 
   *   <dt>string `text_name_holder`</dt>
   *   <dd>Account holder name.</dd>
   * 
   *   <dt>string `text_number`</dt>
   *   <dd>ACH account number.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>Phone number.</dd>
   * 
   *   <dt>string `text_postal`</dt>
   *   <dd>Postal code.</dd>
   * 
   *   <dt>string `text_region`</dt>
   *   <dd>Name of region.</dd>
   * 
   *   <dt>string `text_street1`</dt>
   *   <dd>Street address line 1.</dd>
   * 
   *   <dt>string `text_street2`</dt>
   *   <dd>Street address line 2.</dd>
   * </dl>
   * @post result
   * @var array
   */
  public $a_pay_bank = [];

  /**
   * The HTML form containing the fields required to add a card.
   *
   * @get result
   * @var string
   */
  public $html_widget = '';

  /**
   * Locale ID.
   * `null` - if it is not set.
   *
   * @get get
   * @var int|null
   */
  public $id_locale = null;

  /**
   * Transaction processor id. One of {@link WlPayProcessorSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_pay_processor = 0;

  /**
   * Determines if the set of configs of the new payment form design is used.
   * `true` - if it is the new payment form design.
   * `false` - if it is the old payment form design.
   *
   * @get get
   * @var bool
   */
  public $is_new = false;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Location key.
   *
   * If empty, user's home location will be used.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Pay bank key to delete.
   *
   * @delete get
   * @var string
   */
  public $k_pay_bank = '0';

  /**
   * Pay owner key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_pay_owner = '0';
}

?>