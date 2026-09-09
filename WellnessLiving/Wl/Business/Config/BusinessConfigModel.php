<?php

namespace WellnessLiving\Wl\Business\Config;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\Thoth\WlPay\PayExceptionSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\Policy\BlameSid;
use WellnessLiving\Wl\Business\Policy\ChargeSid;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;
use WellnessLiving\Wl\Service\ServiceSid;

/**
 * Manages business configurations for clients, bookings, payments, and related things.
 *
 * @method WlModelRequest get() Gets information about a business config.  Used by the booking widget and checkout flow to know the rules governing client interactions: which family member relations are allowed, whether clients or staff must select a location at checkout, what cancellation penalties apply, and whether white-label mode is active.
 */
class BusinessConfigModel extends WlModelAbstract
{
  /**
   * All business policies connected to clients and bookings.
   *
   * <dl>
   *   <dt>int[] `a_payment_reattempt_not_decline_reason`</dt>
   *   <dd>
   *     List of not allowed decline reasons to payment reattempt. Each element is one of {@link PayExceptionSid} constants.
   *   </dd>
   * 
   *   <dt>bool[] `a_wait_service`</dt>
   *   <dd>Keys are list of IDs from {@link ServiceSid}, and values are flags whether wait list is allowed.</dd>
   * 
   *   <dt>int `i_book_before`</dt>
   *   <dd>Minimum hours|days|months before class should be booked.</dd>
   * 
   *   <dt>int `i_book_future`</dt>
   *   <dd>Maximum hours|days|months after class can be booked.</dd>
   * 
   *   <dt>int `i_cancel`</dt>
   *   <dd>Minimum hours|days|months before class should be canceled without penalty.</dd>
   * 
   *   <dt>int `i_promote`</dt>
   *   <dd>Minimum hours|days|months before class should be promoted from wait list.</dd>
   * 
   *   <dt>int `i_promote_fastest_response`</dt>
   *   <dd>
   *     Minimum hours|days|months the notifications which are sent for client confirmation required should be sent to all clients on the wait list at the same time up to the cut off time.
   *   </dd>
   * 
   *   <dt>int `i_promote_require_confirm`</dt>
   *   <dd>
   *     Minimum hours|days|months the notifications which are sent for client confirmation must confirm their a promote from the waiting list to the active list.
   *   </dd>
   * 
   *   <dt>int `i_reattempt_count`</dt>
   *   <dd>Number of failed auto-payments reattempts.</dd>
   * 
   *   <dt>int `id_book_before`</dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   * 
   *   <dt>int `id_book_future`</dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   * 
   *   <dt>int `id_cancel`</dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   * 
   *   <dt>int `id_promote`</dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   * 
   *   <dt>int `id_promote_fastest_response`</dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   * 
   *   <dt>int `id_promote_require_confirm`</dt>
   *   <dd>Hours|days|months from {@link ADurationSid}.</dd>
   * 
   *   <dt>bool `is_book_inside_active_pay_period`</dt>
   *   <dd>
   *     if `true` - clients with purchase options are only allowed
   * to book sessions within their current paid period, `false` - during purchase option's duration.
   *   </dd>
   * 
   *   <dt>bool `is_disable_promotion`</dt>
   *   <dd>
   *     1 if a client's automatic payment fails, their account should not be
   * debited and their purchase option becomes inactive, 0 - otherwise. Default 0.
   *   </dd>
   * 
   *   <dt>bool `is_enable_payment_penalty`</dt>
   *   <dd>Whether to charge penalty after final auto-payment attempt.</dd>
   * 
   *   <dt>bool `is_enable_payment_reattempt`</dt>
   *   <dd>Whether to reattempt failed auto-payments.</dd>
   * 
   *   <dt>bool `is_enable_staff_ip_restriction`</dt>
   *   <dd>Whether to restrict which IP addresses staff can login from.</dd>
   * 
   *   <dt>bool `is_prevent_booking`</dt>
   *   <dd>1 if booking for a client with negative balance is disabled, 0 - otherwise. Default 0.</dd>
   * 
   *   <dt>bool `is_staff_restrict`</dt>
   *   <dd>If true, client can not choose provider while appointment wizard.</dd>
   * 
   *   <dt>bool `is_wait`</dt>
   *   <dd>Enable\disable wait list.</dd>
   * 
   *   <dt>string `k_currency`</dt>
   *   <dd>Currency from rs.currency table.</dd>
   * 
   *   <dt>string `k_timezone`</dt>
   *   <dd>Timezone from get.timezone table.</dd>
   * 
   *   <dt>string `m_payment_penalty`</dt>
   *   <dd>Penalty amount to charge after final auto-payment attempt.</dd>
   * 
   *   <dt>string `url_custom`</dt>
   *   <dd>Custom Url of a business</dd>
   * 
   *   <dt>string[] `a_family_relation`</dt>
   *   <dd>
   *     List of allowed relation types specific to a given business.
   *  Key is ID. One of {@link WlFamilyRelationSid} constant.
   *  Value is SID.
   *  
   *   </dd>
   * 
   *   <dt>int[] `a_family_relation_login_allow`</dt>
   *   <dd>
   *     List of allowed relation types specific to a given business.
   *  Each value constant from {@link WlFamilyRelationSid} class.
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_business_policy;

  /**
   * A list of business penalties.
   *
   * <dl>
   *   <dt>string[] `a_class_period`</dt>
   *   <dd>List of class period keys.
   * </dd>
   * 
   *   <dt>string[] `a_login_type`</dt>
   *   <dd>
   *     List of client type keys.
   * 
   * Empty array means all active login types at concrete business.
   *   </dd>
   * 
   *   <dt>string[] `a_resource`</dt>
   *   <dd>List of resources keys.
   * </dd>
   * 
   *   <dt>string[] `a_service`</dt>
   *   <dd>List of services keys.
   * </dd>
   * 
   *   <dt>int `i_blame`</dt>
   *   <dd>Number of blamed visits.</dd>
   * 
   *   <dt>int `i_cancel_period`</dt>
   *   <dd>Count of days/weeks/months.</dd>
   * 
   *   <dt>int `i_charge_measure`</dt>
   *   <dd>Count of applied penalty.</dd>
   * 
   *   <dt>int `id_blame`</dt>
   *   <dd>One of {@link BlameSid} constants.</dd>
   * 
   *   <dt>int `id_cancel_period`</dt>
   *   <dd>Duration ID. One of {@link ADurationSid} constants.</dd>
   * 
   *   <dt>int `id_charge`</dt>
   *   <dd>One of {@link ChargeSid} constants.</dd>
   * 
   *   <dt>bool `is_appointment_all`</dt>
   *   <dd>`1` if all classes are selected, `0` - otherwise.</dd>
   * 
   *   <dt>bool `is_charge_measure_money`</dt>
   *   <dd>`true` for a fixed money amount, `false` for a percentage.</dd>
   * 
   *   <dt>bool `is_class_all`</dt>
   *   <dd>`1` if all classes are selected, `0` - otherwise.</dd>
   * 
   *   <dt>bool `is_enable_cancel_charge`</dt>
   *   <dd>`true` if promotion penalties is enable, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_event_all`</dt>
   *   <dd>`1` if all events are selected, `0` - otherwise.</dd>
   * 
   *   <dt>bool `is_login_type_all`</dt>
   *   <dd>`1` if all login types are selected, `0` - otherwise.</dd>
   * 
   *   <dt>bool `is_resource_all`</dt>
   *   <dd>`1` if all resources are selected, `0` - otherwise.</dd>
   * 
   *   <dt>bool `is_service_all`</dt>
   *   <dd>`1` if all services are selected, `0` - otherwise.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_penalty;

  /**
   * Whether client must select a location at checkout.
   *
   * @get result
   * @var bool
   */
  public $is_location_client_select = false;

  /**
   * Determines whether staff members should select a location at checkout.
   *
   * If `true`, staff members should select a location at checkout. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_location_select;

  /**
   * Determines whether the business has white label setting enabled in the admin settings.
   *
   * If `true`, admin settings are enabled. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_white_label = false;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>