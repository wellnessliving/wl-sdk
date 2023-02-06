<?php

namespace WellnessLiving\Wl\Pay\Form;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint to get information about a payment environment.
 */
class EnvironmentModel extends WlModelAbstract
{
  /**
   * A list of supported bank card systems.
   * Array keys are the card type based on its number, see {@link \WellnessLiving\Core\a\ACardSystemSid},
   * and values are IDs of the card systems, one of {@link \WellnessLiving\Core\a\ACardSystemSid} constants.
   *
   * @get result
   * @var array
   */
  public $a_card_system = [];

  /**
   * A list of payment methods enabled for the staff members. The array key is one of the {@link WlPayMethodSid} constants.
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
   *   <dd>The ID of the payment method type. One of the {@link WlPayMethodSid} constants.</dd>
   *   <dt>bool [<var>is_client</var>]</dt>
   *   <dd>Whether this method is available for clients. This field is only returned for custom payment methods.</dd>
   *   <dt>string|null <var>k_pay_method</var></dt>
   *   <dd>Key of the custom payment method.
   *     It is `null` if this payment method is not custom.</dd>
   *   <dt>string [<var>s_method</var>]</dt>
   *   <dd>Name of the payment method. This field is only returned for custom payment methods.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_method_support = [];

  /**
   * Configuration array that is sent to mobile card reader plugin.
   * Structure of this array completely depends on specific payment processor.
   *
   * @get result
   * @var array|null
   */
  public $a_mobile_config = null;

  /**
   * An array where keys are payment methods type IDs, one of the {@link WlPayMethodSid} constants.
   * The values are IDs of payment processors, one of the {@link WlPayProcessorSid} constants.
   * It is `null` if no processors are set up.
   *
   * @get result
   * @var array|null
   */
  public $a_pay_processor = null;

  /**
   * The percentage of the payment amount to additionally withdraw as a surcharge.
   *
   * It is `null` if percentage surcharge amount should not be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $f_surcharge = null;

  /**
   * The ID of business's locale.
   *
   * @get result
   * @var int|null
   */
  public $id_locale = null;

  /**
   * Whether the newly added payment source should be saved. It is `true` if payment source should be saved.
   * It is `false` if not and `null` if it is not initialized yet.
   *
   * <tt>null</tt> if not set yet.
   * @get result
   * @var bool|null
   */
  public $is_save_source = null;

  /**
   * Key of business to retrieve payment information for.
   *
   * It is `0` if not set yet.
   * Use an empty string if payment is performed with system merchant.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the currency to retrieve payment information for.
   *
   * It is `0` if not set yet.
   * @get get
   * @var string
   */
  public $k_currency = '0';

  /**
   * The key of the location to retrieve payment information for.
   *
   * It is `0` if not set yet.
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The fixed surcharge amount to withdraw from all payment sources that support surcharges.
   *
   * It is `null` if fixed surcharge amount should not be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $m_surcharge = null;
}

?>