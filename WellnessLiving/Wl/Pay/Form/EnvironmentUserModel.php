<?php

namespace WellnessLiving\Wl\Pay\Form;

use WellnessLiving\Core\a\ACardSystemSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPayMethodSid;
use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * Gets information about payment environments for the user.
 */
class EnvironmentUserModel extends WlModelAbstract
{
  /**
   * A list of supported bank card systems.
   * Keys refer to card types based on card numbers (see {@link ACardSystemSid}),
   * and values are IDs of card systems (one of {@link ACardSystemSid} constants).
   *
   * @get result
   * @var array
   */
  public $a_card_system = null;

  /**
   * A list of payment methods enabled for staff members.
   * The ID is one of {@link WlPayMethodSid} constants.
   * The value is always `true`.
   *
   * @get result
   * @var array
   */
  public $a_method_staff = null;

  /**
   * A list of all payment methods that can be used within this business.
   * This array is sorted in the order in which payment methods should be shown to the user.
   * Each element of the array has the following structure:
   *
   * <dl>
   *   <dt>int `id_pay_method`</dt>
   *   <dd>The ID of type of payment method. One of {@link WlPayMethodSid} constants.</dd>
   * 
   *   <dt>bool `is_client`</dt>
   *   <dd>
   *     Determines whether this method is available for clients. This field is only returned for custom payment methods.
   *   </dd>
   * 
   *   <dt>string|null `k_pay_method`</dt>
   *   <dd>
   *     The key of the custom payment method.
   * This will be `null` if this payment method isn't customized.
   * 
   *   </dd>
   * 
   *   <dt>string `s_method`</dt>
   *   <dd>The name of payment method. This field is only returned for custom payment methods.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_method_support = null;

  /**
   * The configuration array that's sent to mobile card reader plugin.
   * The structure of this array depends on the payment processor being used.
   * `null` when mobile card readers are not supported, or when actor has no access to them.
   *
   * @get result
   * @var array|null
   */
  public $a_mobile_config = null;

  /**
   * Represents information about payment processors.
   *
   * Keys are payment methods IDs, one of {@link WlPayMethodSid} constants.
   *
   * Value is the following array: 
   *
   * `null` if no processors are set up.
   *
   * <dl>
   *   <dt>array|null `a_public_keys`</dt>
   *   <dd>
   *     Public keys configured for this payment processor.
   * 
   * `null` if this payment processor does not support public keys.
   *   </dd>
   * 
   *   <dt>array|null `a_public_info`</dt>
   *   <dd>
   *     Public info configured for this payment processor.
   * 
   * `null` if this payment processor does not support public info.
   *   </dd>
   * 
   *   <dt>bool `hide_save_source`</dt>
   *   <dd>Whether `save payment method` option should be hidden. `true` if hidden, `false` - otherwise.</dd>
   * 
   *   <dt>int `id_pay_processor`</dt>
   *   <dd>ID of the payment processor. One of {@link WlPayProcessorSid} constants.</dd>
   * 
   *   <dt>null|bool `is_enabled_3ds`</dt>
   *   <dd>
   *     `true` if 3DS should be performed, `false` if 3DS should not be performed. `null` if this is not defined for payment processor.
   * Only for {@link WlPayProcessorSid::NUVEI}
   *   </dd>
   * 
   *   <dt>bool|null `is_test`</dt>
   *   <dd>
   *     `true` if the merchant is in a test mode, `false` otherwise.
   * `null` if this is not defined for payment processor.
   *   </dd>
   * 
   *   <dt>string `k_business_merchant`</dt>
   *   <dd>Key of the business merchant. </dd>
   * </dl>
   * @get result
   * @var array[]|null
   */
  public $a_pay_processor = null;

  /**
   * Current local date in current location {@link EnvironmentModel::$k_location}
   * or business {@link EnvironmentModel::$k_business} if not set location.
   *
   * @get result
   * @var string
   */
  public $dl_now;

  /**
   * Surcharge amount for payment with card represented as a percent of transaction amount.
   *
   * This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $f_surcharge = null;

  /**
   * Surcharge amount for payment with ACH represented as a percent of transaction amount.
   *
   * This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $f_surcharge_ach = null;

  /**
   * The locale ID of the business.
   *
   * @get result
   * @var int|null
   */
  public $id_locale = null;

  /**
   * `true` if clients can choose whether their banking and credit card information is saved at checkout,
   * `false` if this information is always saved.
   *
   * @get result
   * @var bool
   */
  public $is_save_optional = false;

  /**
   * Determines whether newly added payment sources should be saved. This will be `true` if payment sources should be saved,
   * `false` if otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_save_source = null;

  /**
   * Whether tips are accepted.
   *
   * @get result
   * @var bool
   */
  public $is_tip = false;

  /**
   * The key of the business to retrieve payment information for.
   *
   * This will be `0` if not set yet.
   * An empty string or `null` if payments are performed with the WellnessLiving system merchant.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the currency to retrieve payment information for.
   *
   * @get get
   * @var string
   */
  public $k_currency = '0';

  /**
   * The key of the location to retrieve payment information for.
   *
   * This will be `0` if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Surcharge amount for payment with card represented as a fixed amount.
   *
   * This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $m_surcharge = null;

  /**
   * Surcharge amount for payment with ACH represented as a fixed amount.
   *
   * This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $m_surcharge_ach = null;

  /**
   * The user ID to retrieve payment information for.
   *
   * `null` if not defined.
   *
   * @get get
   * @var string|null
   */
  public $uid_owner = null;
}

?>