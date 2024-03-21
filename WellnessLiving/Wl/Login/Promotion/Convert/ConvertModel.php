<?php

namespace WellnessLiving\Wl\Login\Promotion\Convert;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that receives convertable Purchase Option data and promotion conversions.
 *
 * The DELETE method will remove the conversion and reset the date.
 * The GET method will return a list of promotions available at the business.
 * The POST method can be used to change what the Purchase Option should convert to and when to convert it.
 */
class ConvertModel extends WlModelAbstract
{
  /**
   * Promotion data containing the following structure:<dl>
   *   <dt>string <var>k_promotion</var></dt>
   *   <dd>The promotion key.</dd>
   *   <dt>string <var>html_title</var></dt>
   *   <dd>The title of the promotion.</dd>
   *   <dt>bool <var>is_select</var></dt>
   *   <dd>If <tt>true</tt>, the promotion is related to the service. Otherwise, this will be <tt>false</tt>.</dd>
   * </dl>.
   *
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * The conversion date, in the local time zone.
   *
   * @post get
   * @var string
   */
  public $dl_convert = '';

  /**
   * The conversion ID. One of the {@link PromotionConvertSid} constants.
   *
   * @get result
   * @post get
   * @var string
   */
  public $id_convert = null;

  /**
   * Determines whether the conversion request is new or editing an existing conversion.
   *
   * If `true`, the conversion exists. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_edit = false;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The login promotion key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * The promotion key the given promotion will be converted to.
   *
   * @post get
   * @var string
   */
  public $k_promotion_to = '';

  /**
   * The existing conversion date, returned as a string for the datepicker.
   *
   * @get result
   * @var string
   */
  public $s_date_convert = '';

  /**
   * The current date, returned as a string.
   *
   * @get result
   * @var string
   */
  public $s_date_now = '';

  /**
   * The Purchase Option title.
   *
   * @get result
   * @var string
   */
  public $s_title = '';

  /**
   * The note for the promotion conversion.
   *
   * @get result
   * @post get
   * @var string|null
   */
  public $text_note = '';

}

?>