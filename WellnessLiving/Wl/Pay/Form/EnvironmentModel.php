<?php

namespace WellnessLiving\Wl\Pay\Form;

use WellnessLiving\WlModelAbstract;

/**
 * Gets information about payment environments.
 */
class EnvironmentModel extends WlModelAbstract
{
  /**
   * A list of supported bank card systems.
   * Keys refer to card types based on card numbers (see {@link \WellnessLiving\Core\a\ACardSystemSid}),
   * and values are IDs of card systems (one of {@link \WellnessLiving\Core\a\ACardSystemSid} constants).
   *
   * @get result
   * @var array
   */
  public $a_card_system;

  /**
   * A list of payment methods enabled for staff members. The ID is one of {@link \WellnessLiving\WlPayMethodSid} constants.
   * The value is always `true`.
   *
   * @get result
   * @var array
   */
  public $a_method_staff;

  /**
   * A list of all payment methods that can be used within this business.
   * This array is sorted in the order in which payment methods should be shown to the user.
   * Each element of the array has the following structure:
   * <dl>
   *   <dt>int <var>id_pay_method</var></dt>
   *   <dd>The ID of type of payment method. One of {@link \WellnessLiving\WlPayMethodSid} constants.</dd>
   *   <dt>bool [<var>is_client</var>]</dt>
   *   <dd>Determines whether this method is available for clients. This field is only returned for custom payment methods.</dd>
   *   <dt>string|null <var>k_pay_method</var></dt>
   *   <dd>
   *     The key of the custom payment method.
   *     This will be `null` if this payment method isn't customized.
   *   </dd>
   *   <dt>string [<var>s_method</var>]</dt>
   *   <dd>The name of payment method. This field is only returned for custom payment methods.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_method_support;

  /**
   * The configuration array that's sent to mobile card reader plugin.
   * The structure of this array depends on the payment processor being used.
   *
   * @get result
   * @var array|null
   */
  public $a_mobile_config;

  /**
   * Represents information about payment processors.
   *
   * Keys are payment methods IDs, one of {@link \WellnessLiving\WlPayMethodSid} constants.
   *
   * Value is the following array: <dl>
   *   <dt>array|null <var>a_public_keys</var></dt>
   *   <dd>
   *     Public keys configured for this payment processor.
   *     Copy of result of {@link Wl\Pay\Processor\ProcessorInterface\PayProcessorPublicKeysInterface::publicKeys()}.
   *     `null` if this payment processor does not support public keys.
   *   </dd>
   *   <dt>int <var>id_pay_processor</var></dt>
   *   <dd>ID of the payment processor. One of {@link \WellnessLiving\WlPayProcessorSid} constants.</dd>
   *   <dt>string <var>k_business_merchant</var></dt>
   *   <dd>Key of the business merchant.</dd>
   * </dl>
   *
   * `null` if no processors are set up.
   *
   * @get result
   * @var array[]|null
   */
  public $a_pay_processor;

  /**
   * The percentage of the payment amount to additionally withdraw as a surcharge.
   *
   * This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $f_surcharge;

  /**
   * The locale ID of the business.
   *
   * @get result
   * @see \WellnessLiving\Core\Locale\LocaleSid
   * @var int|null
   */
  public $id_locale;

  /**
   * Determines whether newly added payment sources should be saved. This will be `true` if payment sources should be saved,
   * `false` if otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_save_source;

  /**
   * The key of the business to retrieve payment information for.
   *
   * This will be `0` if not set yet.
   * An empty string if payments are performed with the WellnessLiving system merchant.
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
   * The fixed surcharge amount to withdraw from all payment sources that support surcharges.
   *
   * This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $m_surcharge;
}

?>