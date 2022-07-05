<?php

namespace WellnessLiving\Wl\Business\Config;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlServiceSid;

/**
 * Manage business configurations related to clients, bookings, payments, etc.
 */
class BusinessConfigModel extends WlModelAbstract
{
  /**
   * All business policies connected to clients and bookings.
   *
   * <dl>
   *   <dt>int <var>a_wait_service</var></dt>
   *   <dd>Keys are list of IDs from {@link WlServiceSid}, and values are flags whether wait list is allowed.</dd>
   *   <dt>int <var>i_book_before</var></dt>
   *   <dd> Minimum hours|days|months before class should be to book.</dd>
   *   <dt>int <var>i_book_future</var></dt>
   *   <dd> Maximum hours|days|months after class can be to book.</dd>
   *   <dt>int <var>i_cancel</var></dt>
   *   <dd> Minimum hours|days|months before class should be to cancel without penalty.</dd>
   *   <dt>int <var>i_promote</var></dt>
   *   <dd> Minimum hours|days|months before class should be to promote from wait list.</dd>
   *   <dt>int <var>i_reattempt_count</var></dt>
   *   <dd>Number of failed auto-payments reattempts.</dd>
   *   <dt>int <var>id_book_before</var></dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   *   <dt>int <var>id_book_future</var></dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   *   <dt>int <var>id_cancel</var></dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   *   <dt>int <var>id_promote</var></dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   *   <dt>bool <var>is_book_inside_active_pay_period</var></dt>
   *   <dd>if `true` - clients with purchase options are only allowed
   *     to book sessions within their current paid period, `false` - during purchase option's duration.</dd>
   *   <dt>int <var>is_disable_promotion</var></dt>
   *   <dd>1 if a client's automatic payment fails, their account should not be
   *     debited and their purchase option becomes inactive, 0 - otherwise. Default 0.</dd>
   *   <dt>bool <var>is_enable_payment_penalty</var></dt>
   *   <dd>Whether to charge penalty after final auto-payment attempt.</dd>
   *   <dt>bool <var>is_enable_payment_reattempt</var></dt>
   *   <dd>Whether to reattempt failed auto-payments.</dd>
   *   <dt>bool <var>is_enable_staff_ip_restriction</var></dt>
   *   <dd>Whether to restrict which IP addresses staff can login from.</dd>
   *   <dt>int <var>is_prevent_booking</var></dt>
   *   <dd>1 if booking for a client with negative balance is disabled, 0 - otherwise. Default 0.</dd>
   *   <dt>bool <var>is_staff_restrict</var></dt>
   *   <dd>If true, client can not choose provider while appointment wizard.</dd>
   *   <dt>bool <var>is_wait</var></dt>
   *   <dd>Enable\disable wait list.</dd>
   *   <dt>int <var>k_currency</var></dt>
   *   <dd>Currency from rs.currency table.</dd>
   *   <dt>int <var>k_timezone</var></dt>
   *   <dd>Timezone from get.timezone table.</dd>
   *   <dt>string <var>m_payment_penalty</var></dt>
   *   <dd>Penalty amount to charge after final auto-payment attempt.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_business_policy;

  /**
   * Whether staff should select a location at checkout.
   *
   * `true` - staff should select a location at checkout, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_location_select;

  /**
   * Business key. Primary key in {@link \RsBusinessSql} table.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>




