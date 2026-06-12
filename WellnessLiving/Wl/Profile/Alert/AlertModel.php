<?php

namespace WellnessLiving\Wl\Profile\Alert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlProfileNoteSid;

/**
 * Retrieves information about client alert messages.
 */
class AlertModel extends WlModelAbstract
{
  /**
   * A list of alerts. Every element is an array with the following keys:
   *
   * <dl>
   *   <dt>string|null `dt_date`</dt>
   *   <dd>
   *     The date and time in MySQL format in local time when the alert was last modified.
   * This will be `null` if the date isn't available for this alert.
   *   </dd>
   * 
   *   <dt>bool `is_today`</dt>
   *   <dd>This will be `true` if the alert was added today. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>int `id_profile_note`</dt>
   *   <dd>ID of alert type. One of {@link WlProfileNoteSid} constants.</dd>
   * 
   *   <dt>string `k_pay_account`</dt>
   *   <dd>The key of the client's account. 
   * 
   *   <dt>string `k_purchase_item`</dt>
   *   <dd>The key of the purchase item. 
   * 
   *   <dt>string `s_text`</dt>
   *   <dd>The alert's text.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_alert;

  /**
   * A list of warnings. Every element is an array with the following keys:
   *
   * <dl>
   *   <dt>string[] `a_location_flag`</dt>
   *   <dd>The list of location keys where this note is flagged. 
   * 
   *   <dt>bool `dt_create`</dt>
   *   <dd>The date and time in MySQL format in local time when the warning was created.</dd>
   * 
   *   <dt>bool `dt_date`</dt>
   *   <dd>The date and time in MySQL format in local time when the warning was last modified.</dd>
   * 
   *   <dt>bool `is_book_restricted`</dt>
   *   <dd>`true` means that client is restricted to make bookings, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_flag`</dt>
   *   <dd>This will be `true` if the client is flagged. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_purchase_restricted`</dt>
   *   <dd>`true` means that client is restricted to make purchases. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_today`</dt>
   *   <dd>This will be `true` if the warning was added today. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>string `s_text`</dt>
   *   <dd>The text of the warning.</dd>
   * 
   *   <dt>string `text_author`</dt>
   *   <dd>Staff name, who created a note.</dd>
   * 
   *   <dt>string `text_editor`</dt>
   *   <dd>Staff name, who edited a note last time.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_warning;

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

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