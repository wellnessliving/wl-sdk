<?php

namespace WellnessLiving\Wl\Pay\Form;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets information about payment environments.
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
  public $a_card_system = [];

  /**
   * A list of payment methods enabled for staff members. The key is one of {@link WlPayMethodSid} constants.
   * The value is always `true`.
   *
   * @get result
   * @var array
   */
  public $a_method_staff = [];

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
   *   <dd>The key of the custom payment method.
   *     This will be `null` if this payment method isn't customized.</dd>
   *   <dt>string [<var>s_method</var>]</dt>
   *   <dd>The name of payment method. This field is only returned for custom payment methods.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_method_support = [];

  /**
   * The configuration array that's sent to mobile card reader plugin.
   * The structure of this array depends on the payment processor being used.
   *
   * @get result
   * @var array|null
   */
  public $a_mobile_config = null;

  /**
   * An array, where keys are payment methods type IDs (one of {@link WlPayMethodSid} constants)
   * and values are IDs of payment processors (one of {@link WlPayProcessorSid} constants).
   * This will be `null` if no processors are set up.
   *
   * @get result
   * @var array|null
   */
  public $a_pay_processor = null;

  /**
   * The percentage of the payment amount to additionally withdraw as a surcharge.
   *
   * This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $f_surcharge = null;

  /**
   * The locale ID of the business.
   *
   * @get result
   * @var int|null
   */
  public $id_locale = null;

  /**
   * Determines whether newly added payment sources should be saved. This will be `true` if payment sources should be saved,
   * `false` if otherwise.
   *
   * This will be `null` if not set yet.
   * @get result
   * @var bool|null
   */
  public $is_save_source = null;

  /**
   * The key of the business to retrieve payment information for.
   *
   * This will be `0` if not set yet.
   * An empty string will be returned if payments are performed with the WellnessLiving system merchant.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the currency to retrieve payment information for.
   *
   * This will be `0` if not set yet.
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
  public $m_surcharge = null;
}

?>