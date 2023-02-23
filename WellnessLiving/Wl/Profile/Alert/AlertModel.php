<?php

namespace WellnessLiving\Wl\Profile\Alert;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about client alert messages.
 */
class AlertModel extends WlModelAbstract
{
  /**
   * A list of alerts. Every element is an array with the following keys:
   * <dl>
   *   <dt>string|null <var>dt_date</var></dt>
   *   <dd>
   *     The date and time in MySQL format in local time when the alert was last modified.
   *     This will be `null` if the date isn't available for this alert.
   *   </dd>
   *   <dt>bool <var>is_today</var></dt>
   *   <dd>This will be `true` if the alert was added today. Otherwise, this will be `false`.</dd>
   *   <dt>string [<var>k_pay_account</var>]</dt>
   *   <dd>The ID of the client's account.</dd>
   *   <dt>string [<var>k_purchase_item</var>]</dt>
   *   <dd>The ID of the purchase item.</dd>
   *   <dt>string <var>s_text</var></dt>
   *   <dd>The alert's text.</dd>
   * </dl>
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array|null
   *
   */
  public $a_alert = null;

  /**
   * A list of warnings. Every element is an array with the following keys:
   * <dl>
   *   <dt>bool <var>dt_date</var></dt>
   *   <dd>The date and time in MySQL format in local time when the warning was last modified.</dd>
   *   <dt>bool <var>is_flag</var></dt>
   *   <dd>This will be `true` if the client is flagged. Otherwise, this will be `false`.</dd>
   *   <dt>bool <var>is_today</var></dt>
   *   <dd>This will be `true` if the warning was added today. Otherwise, this will be `false`.</dd>
   *   <dt>string <var>s_text</var></dt>
   *   <dd>The text of the warning.</dd>
   * </dl>
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array|null
   *
   */
  public $a_warning = null;

  /**
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>