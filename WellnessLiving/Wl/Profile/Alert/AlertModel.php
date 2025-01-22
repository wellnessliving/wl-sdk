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
   * <dl>
   *   <dt>
   *     string|null <var>dt_date</var>
   *   </dt>
   *   <dd>
   *     The date and time in MySQL format in local time when the alert was last modified.
   *     This will be `null` if the date isn't available for this alert.
   *   </dd>
   *   <dt>
   *     bool <var>is_today</var>
   *   </dt>
   *   <dd>
   *     This will be `true` if the alert was added today. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     int <var>id_profile_note</var>
   *   </dt>
   *   <dd>
   *     ID of alert type. One of {@link WlProfileNoteSid} constants.
   *   </dd>
   *   <dt>
   *     string [<var>k_pay_account</var>]
   *   </dt>
   *   <dd>
   *     The key of the client's account.
   *   </dd>
   *   <dt>
   *     string [<var>k_purchase_item</var>]
   *   </dt>
   *   <dd>
   *     The key of the purchase item.
   *   </dd>
   *   <dt>
   *     string <var>s_text</var>
   *   </dt>
   *   <dd>
   *     The alert's text.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_alert;

  /**
   * A list of warnings. Every element is an array with the following keys:
   * <dl>
   *   <dt>
   *     string[] <var>a_location_flag</var>
   *   </dt>
   *   <dd>
   *
   *   </dd>
   *   <dt>
   *     bool <var>dt_create</var>
   *   </dt>
   *   <dd>
   *     The date and time in MySQL format in local time when the warning was created.
   *   </dd>
   *   <dt>
   *     bool <var>dt_date</var>
   *   </dt>
   *   <dd>
   *     The date and time in MySQL format in local time when the warning was last modified.
   *   </dd>
   *   <dt>
   *     bool <var>is_book_restricted</var>
   *   </dt>
   *   <dd>
   *     `true` means that client is restricted to make bookings, `false` - otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_flag</var>
   *   </dt>
   *   <dd>
   *     This will be `true` if the client is flagged. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_purchase_restricted</var>
   *   </dt>
   *   <dd>
   *     `true` means that client is restricted to make purchases. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_today</var>
   *   </dt>
   *   <dd>
   *     This will be `true` if the warning was added today. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     string <var>s_text</var>
   *   </dt>
   *   <dd>
   *     The text of the warning.
   *   </dd>
   *   <dt>
   *     string <var>text_author</var>
   *   </dt>
   *   <dd>
   *     Staff name, who created a note.
   *   </dd>
   *   <dt>
   *     string <var>text_editor</var>
   *   </dt>
   *   <dd>
   *     Staff name, who edited a note last time.
   *   </dd>
   * </dl>
   *
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