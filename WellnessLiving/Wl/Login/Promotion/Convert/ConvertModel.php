<?php

namespace WellnessLiving\Wl\Login\Promotion\Convert;

use WellnessLiving\WlModelAbstract;

/**
 * API for receiving convertable purchase options data and promotion conversion.
 *
 * The DELETE method will remove the conversion and reset the date.
 * The GET method will return a list of promotions available at the business.
 * The POST method can be used to change what or when the Purchase Option should convert to.
 */
class ConvertModel extends WlModelAbstract
{
  /**
   * Promotion data, it has the following structure:<dl>
   *   <dt>string <var>k_promotion</var></dt>
   *   <dd>The promotion key.</dd>
   *   <dt>string <var>html_title</var></dt>
   *   <dd>The title of the promotion.</dd>
   *   <dt>bool <var>is_select</var></dt>
   *   <dd><tt>true</tt> if the promotion is related to the service, <tt>false</tt> otherwise.</dd>
   * </dl>.
   *
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * The conversion Date, in the local timezone.
   *
   * @post get
   * @var string
   */
  public $dl_convert = '';

  /**
   * The conversion id. One of the {@link PromotionConvertSid} constants.
   *
   * @get result
   * @post get
   * @var string
   */
  public $id_convert = null;

  /**
   * Whether the conversion request is new or editing existing conversion.
   * <tt>true</tt> if conversion exists, otherwise <tt>false</tt>.
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
   * The existing Conversion Date in string format for datepicker.
   *
   * @get result
   * @var string
   */
  public $s_date_convert = '';

  /**
   * The current date in string format.
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