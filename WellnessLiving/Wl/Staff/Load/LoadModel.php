<?php

namespace WellnessLiving\Wl\Staff\Load;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsStaffPaySid;

/**
 * Point to clock in/out by a staff member.
 *
 * @ This class will be removed in future versions.
 *
 * @method WlModelRequest get() Checks if staff member is clocked in.  Resolves the staff identifier, checks access, and returns the current open clock-in record  for the staff member, if any, together with its resolved location and localized start time  and start message. Also returns the hourly pay rates available to the staff member.
 * @method WlModelRequest put() Clocks staff member in (if he is clocked out) or out (if he is clocked in).  When clocking out, closes the open work session, computes the pay rate to apply, records  the completed period in the staff load history and logs the change. When clocking in,  opens a new work session at the given location with the selected pay rate. Sets `is_start`  to reflect whether the staff member is now clocked in or out.
 */
class LoadModel extends WlModelAbstract
{
  /**
 * Staff pay rates info.
 *
 * <dl>
 *   <dt>array `a_data`</dt>
 *   <dd>
 *     Custom data that depends on `id_staff_pay`.
 *     <dl>
 *       <dt>string `f_rate`</dt>
 *       <dd>Hourly rate.</dd>
 * 
 *       <dt>string `f_cap`</dt>
 *       <dd>Pay rate cap.</dd>
 * 
 *       <dt>string `f_cap_day`</dt>
 *       <dd>Pay rate cap per day.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>int `id_staff_pay`</dt>
 *   <dd>Pay rate type, one of {@link RsStaffPaySid} constants.</dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>
 *     Location key. 
 * This is a location where pay rate can be used for a staff load.
 * If empty then pay rate can be used in any location. Used only for pay
 * rates with `id_staff_pay` {@link RsStaffPaySid::HOUR} and `is_report`.
 *   </dd>
 * 
 *   <dt>string `k_staff_pay`</dt>
 *   <dd>Pay rate key. </dd>
 * 
 *   <dt>string `s_title`</dt>
 *   <dd>Name of the rate.</dd>
 * </dl>
 * @get result
 * @var array
 */
  public $a_pay_rate = [];

  /**
 * Staff work information.
 * Empty array if the staff member is currently clocked out.
 *
 * <dl>
 *   <dt>string `dt_start`</dt>
 *   <dd>Date and time in UTC when the staff member clocked in.</dd>
 * 
 *   <dt>string `dtl_start`</dt>
 *   <dd>Local date and time when the staff member clocked in.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string|null `k_location`</dt>
 *   <dd>Location key. `null` if the location could not be resolved for the work session.</dd>
 * 
 *   <dt>string|null `k_staff_pay`</dt>
 *   <dd>Pay rate key used for the work session.</dd>
 * </dl>
 * @get result
 * @put result
 * @var array
 */
  public $a_work = [];

  /**
 * <tt>true</tt> if staff member has been clocked in; <tt>false</tt> if clocked out.
 *
 * @put result
 * @var bool
 */
  public $is_start;

  /**
 * Whether staff member can manage staff clock in/out for other staff members.
 *
 * @get result
 * @var bool
 */
  public $is_time_manage = false;

  /**
 * Business in which information about the staff load will be requested.
 *
 * @get get
 * @put get
 * @var string
 */
  public $k_business = '0';

  /**
 * Location primary key.
 *
 * @put post
 * @var string|null
 */
  public $k_location = null;

  /**
 * Staff member primary key.
 *
 * @get get
 * @put get
 * @var string
 * @deprecated Use {@link LoadModel::$uid_staff} instead.
 */
  public $k_staff = '0';

  /**
 * Pay rate identifier.
 *
 * @put post
 * @var string
 */
  public $k_staff_pay = '0';

  /**
 * Message, when the work has been started.
 *
 * @get result
 * @var string
 */
  public $text_work_start = '';

  /**
 * User key.
 *
 * @get get
 * @put get
 * @var string
 */
  public $uid_staff = '';
}

?>