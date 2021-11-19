<?php

namespace WellnessLiving\Wl\Pay\Form;

use WellnessLiving\WlModelAbstract;

/**
 * Model to get information about payment environment.
 */
class EnvironmentModel extends WlModelAbstract
{
  /**
   * A list of supported bank card systems.
   * Keys are card type based on its number, see {@link \WellnessLiving\Core\a\ACardSystemSid},
   * and values are IDs of card systems, one of {@link \WellnessLiving\Core\a\ACardSystemSid} constants.
   *
   * @get result
   * @var array
   */
  public $a_card_system = [];

  /**
   * A list of payment methods enabled for staff members. Key is one of {@link WlPayMethodSid} constants. Value is always <tt>true</tt>.
   *
   * @get result
   * @var array
   */
  public $a_method_staff = [];

  /**
   * A list of all payment methods that can be used within this business.
   * This array is sorted in order in which payment methods should be shown to the user.
   * Each element of the array has the following structure:
   * <dl>
   *   <dt>int <var>id_pay_method</var></dt>
   *   <dd>ID of type of payment method. One of {@link WlPayMethodSid} constants.</dd>
   *   <dt>bool [<var>is_client</var>]</dt>
   *   <dd>Whether this method is available for clients. This field is only returned for custom payment methods.</dd>
   *   <dt>string|null <var>k_pay_method</var></dt>
   *   <dd>Key of custom payment method.
   *     <tt>null</tt> if this payment method is not custom.</dd>
   *   <dt>string [<var>s_method</var>]</dt>
   *   <dd>Name of payment method. This field is only returned for custom payment methods.</dd>
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
   * Array, where keys are payment methods type IDs, one of {@link WlPayMethodSid} constants,
   * and values are IDs of payment processors, one of {@link WlPayProcessorSid} constants.
   * `null` if no processors are set up.
   *
   * @get result
   * @var array|null
   */
  public $a_pay_processor = null;

  /**
   * Percentage of payment amount to additionally withdraw as a surcharge.
   *
   * `null` if percentage surcharge amount should not be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $f_surcharge = null;

  /**
   * Locale of the business.
   *
   * @get result
   * @var int|null
   */
  public $id_locale = null;

  /**
   * Whether newly added payment source should be saved. <tt>true</tt> if payment source should be saved. <tt>false</tt> if not. <tt>null</tt> if it is not initialized yet.
   *
   * <tt>null</tt> if not set yet.
   * @get result
   * @var bool|null
   */
  public $is_save_source = null;

  /**
   * Key of business to retrieve payment information for.
   *
   * <tt>'0'</tt> if not set yet.
   * Empty string if payment is performed with system merchant.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of currency to retrieve payment information for.
   *
   * <tt>'0'</tt> if not set yet.
   * @get get
   * @var string
   */
  public $k_currency = '0';

  /**
   * Key of the location to retrieve payment information for.
   *
   * <tt>'0'</tt> if not set yet.
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Fixed surcharge amount to withdraw from all payment sources that support surcharges.
   *
   * `null` if fixed surcharge amount should not be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $m_surcharge = null;


}