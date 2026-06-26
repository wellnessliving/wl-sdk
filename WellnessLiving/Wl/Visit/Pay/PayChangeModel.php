<?php

namespace WellnessLiving\Wl\Visit\Pay;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages changing purchase option to pay for visit.
 *
 * @method WlModelRequest get() Returns data to change visit pay option.
 * @method WlModelRequest post() Saves user's promotion for certain attendance.
 */
class PayChangeModel extends WlModelAbstract
{
  /**
   * List of purchase options that can be applied to pay for visit:
   *
   * <dl>
   *   <dt>array `a_logo`</dt>
   *   <dd> Empty array for not paid option.</dd>
   * 
   *   <dt>bool `is_select`</dt>
   *   <dd>Whether current element selected in the list.</dd>
   * 
   *   <dt>string `s_key`</dt>
   *   <dd>
   *     <tt>0</tt> means 'Single buy', <tt>-1</tt> means 'Not paid'. Otherwise key with next structure: <tt>k_login_promotion:[k_login_promotion]</tt> or <tt>k_session_pass:[k_session_pass]</tt>.
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of select option.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_list;

  /**
   * Whether changes applied to visit (if user selected the same promotion, we should do nothing).
   *
   * @post result
   * @var bool
   */
  public $is_change;

  /**
   * Defines whether 'pay now' option should be present.
   *
   * @get get
   * @var bool
   */
  public $is_pay_now = false;

  /**
   * Business key.
   *
   * Empty value means not set.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Class period key.
   *
   * Empty value means not set.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_visit = '';

  /**
   * Selected pay option to save. The value with one of next structures:
   * * <tt>k_login_promotion</tt>:<tt>[k_login_promotion]</tt>
   * * <tt>k_session_pass</tt>:<tt>[k_session_pass]</tt>
   *
   * @post post
   * @var string
   */
  public $text_key = '0';

  /**
   * Current user ID.
   *
   * Empty value means not set.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>