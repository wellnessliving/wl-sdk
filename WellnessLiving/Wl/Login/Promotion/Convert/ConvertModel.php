<?php

namespace WellnessLiving\Wl\Login\Promotion\Convert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlProgramSid;

/**
 * Receives convertable Purchase Option data and promotion conversions.
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
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The title of the promotion.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>One of {@link WlProgramSid} constants.</dd>
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
   * The last date on what conversion can be scheduled.
   *
   * @get result
   * @var string
   */
  public $dl_convert_max = '';

  /**
   * The first date on what conversion can be scheduled.
   *
   * @get result
   * @var string
   */
  public $dl_convert_min = '';

  /**
   * Local date, when hold ends, if PO is on hold right now.
   * Empty if PO is not on hold, or hold is endless.
   *
   * @get result
   * @var string
   */
  public $dl_hold_end = '';

  /**
   * Local date, when hold starts, if PO is on hold right now.
   * Empty if PO is not on hold.
   *
   * @get result
   * @var string
   */
  public $dl_hold_start = '';

  /**
   * The conversion ID.
   *
   * @get result
   * @post get
   * @var string
   */
  public $id_convert = null;

  /**
   * When conversion should be done. One of the {@link ConvertWhenSid} constants.
   *
   * `null` if it's not set yet.
   *
   * @get result
   * @post get
   * @var int|null
   */
  public $id_convert_when = null;

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
   * `true` if PO is going to be renewed and not converted.
   * `false` if PO is going to expire or to convert.
   *
   * @get result
   * @var bool
   */
  public $is_renew = false;

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
   * Expiration date in string user-friendly format.
   *
   * @get result
   * @var string
   */
  public $text_date_expire = '';

  /**
   * Next payment date in string user-friendly format.
   *
   * @get result
   * @var string
   */
  public $text_date_payment = '';

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