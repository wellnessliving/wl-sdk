<?php

namespace WellnessLiving\Wl\Profile\Alert;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about user alert messages.
 */
class AlertModel extends WlModelAbstract
{
  /**
   * List of alerts. Every element array with keys:
   * <dl>
   *   <dt>string|null <var>dt_date</var></dt>
   *   <dd>
   *     Date and time in MySQL format in local time when alert was last modified.
   *     <tt>null</tt> if date is not available for this alert.
   *   </dd>
   *   <dt>bool <var>is_today</var></dt>
   *   <dd><tt>true</tt> - if alert added today; <tt>false</tt> - otherwise.</dd>
   *   <dt>string [<var>k_pay_account</var>]</dt>
   *   <dd>ID of user's account. Primary key in {@link RsPayAccountSql} table.</dd>
   *   <dt>string [<var>k_purchase_item</var>]</dt>
   *   <dd>ID of purchase item. Primary  key in {@link RsPurchaseItemSql} table.</dd>
   *   <dt>string <var>s_text</var></dt>
   *   <dd>Text of alert.</dd>
   * </dl>
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array|null
   *
   */
  public $a_alert = null;

  /**
   * List of warnings. Every element array with keys:
   * <dl>
   *   <dt>bool <var>dt_date</var></dt>
   *   <dd>Date and time in MySQL format in local time when warning was last modified.</dd>
   *   <dt>bool <var>is_flag</var></dt>
   *   <dd><tt>true</tt> - is flagged; <tt>false</tt> - is not flagged.</dd>
   *   <dt>bool <var>is_today</var></dt>
   *   <dd><tt>true</tt> - if warning added today; <tt>false</tt> - otherwise.</dd>
   *   <dt>string <var>s_text</var></dt>
   *   <dd>Text of warning.</dd>
   * </dl>
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array|null
   *
   */
  public $a_warning = null;

  /**
   * Key of current business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>