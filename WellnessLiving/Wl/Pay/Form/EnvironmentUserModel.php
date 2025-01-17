<?php

namespace WellnessLiving\Wl\Pay\Form;

use WellnessLiving\Core\a\ACardSystemSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPayMethodSid;

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
     * A list of payment methods enabled for staff members. The ID is one of {@link WlPayMethodSid} constants.
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
     * <dl>
     *   <dt>int <var>id_pay_method</var></dt>
     *   <dd>The ID of type of payment method. One of {@link WlPayMethodSid} constants.</dd>
     *   <dt>bool [<var>is_client</var>]</dt>
     *   <dd>Determines whether this method is available for clients. This field is only returned for custom payment methods.</dd>
     *   <dt>string|null <var>k_pay_method</var></dt>
     *   <dd>
     *     The key of the custom payment method.
     *     This will be `null` if this payment method isn't customized.
     *
     *   </dd>
     *   <dt>string [<var>s_method</var>]</dt>
     *   <dd>The name of payment method. This field is only returned for custom payment methods.</dd>
     * </dl>
     *
     * @get result
     * @var array[]
     */
  public $a_method_support = null;

  /**
     * The configuration array that's sent to mobile card reader plugin.
     * The structure of this array depends on the payment processor being used.
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
     * Value is the following array: <dl>
     *   <dt>array|null <var>a_public_keys</var></dt>
     *   <dd>
     *     Public keys configured for this payment processor.
     *
     *     `null` if this payment processor does not support public keys.
     *   </dd>
     *   <dt>int <var>id_pay_processor</var></dt>
     *   <dd>ID of the payment processor.</dd>
     *   <dt>null|bool <var>is_enabled_3ds</var></dt>
     *   <dd>`true` if 3DS should be performed, `false` if 3DS should not be performed. `null` if this is not defined for payment processor.
     *     Only for {@link PayProcessorSid::NUVEI}
     *   </dd>
     *   <dt>string <var>k_business_merchant</var></dt>
     *   <dd>Key of the business merchant.</dd>
     * </dl>
     *
     * `null` if no processors are set up.
     *
     * @get result
     * @var array[]|null
     *
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
     *
     */
  public $id_locale = null;

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
     *
     */
  public $k_business = '0';

  /**
     * The key of the currency to retrieve payment information for.
     *
     * @get get
     * @var string
     *
     */
  public $k_currency = '0';

  /**
     * The key of the location to retrieve payment information for.
     *
     * This will be `0` if not set yet.
     *
     * @get get
     * @var string
     *
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