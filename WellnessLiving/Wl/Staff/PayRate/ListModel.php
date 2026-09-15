<?php

namespace WellnessLiving\Wl\Staff\PayRate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsStaffPaySid;

/**
 * List of staff pay rates for the business.
 *
 * @method WlModelRequest get() Loads the list of staff pay rates for the business.  When both `uid_staff` and `id_staff_pay` are given, returns the pay rates of that type  available to the specified staff member at the given location. Otherwise, returns the  full business pay-rate list. Applications outside the legacy allow-list do not receive  the `k_staff` field in the result.
 */
class ListModel extends WlModelAbstract
{
  /**
 * Pay rate list:
 *
 * <dl>
 *   <dt>int `id_staff_pay`</dt>
 *   <dd>Pay rate type, one of {@link RsStaffPaySid} constants.</dd>
 * 
 *   <dt>bool `is_commission_default`</dt>
 *   <dd>Whether commission pay rate used as default for staff with <var>k_staff</var>.</dd>
 * 
 *   <dt>bool `is_default`</dt>
 *   <dd>Whether pay rate used as default for staff with <var>k_staff</var>.</dd>
 * 
 *   <dt>bool `is_hour_default`</dt>
 *   <dd>Whether hourly pay rate used as default for staff with <var>k_staff</var>.</dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>
 *     Location key. Primary key from . This is a location where pay rate can be used for a staff staff load. If empty then pay rate can be used in any location. Used only for pay
 * rates with <var>id_staff_pay</var>={@link RsStaffPaySid::HOUR} and <var>is_report</var>=1.
 *   </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     
 * Staff key, primary key in .
 * deprecated Returned only for applications from legacy allow-list. Use <var>uid_staff</var>.
 *   </dd>
 * 
 *   <dt>string `k_staff_pay`</dt>
 *   <dd>Pay rate identifier, primary key in .</dd>
 * 
 *   <dt>string `text_staff`</dt>
 *   <dd>Name of staff member.</dd>
 * 
 *   <dt>string `text_title`</dt>
 *   <dd>Pay rate title.</dd>
 * 
 *   <dt>string `uid_staff`</dt>
 *   <dd>Staff user ID. Primary key in .</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_pay_rate;

  /**
 * Pay rate type. One of {@link RsStaffPaySid} constants.
 *
 * @get get
 * @var int
 */
  public $id_staff_pay = 0;

  /**
 * ID of business.
 *
 * @get get
 * @var string
 */
  public $k_business = '0';

  /**
 * Location key to get list of pay rates for special location.
 *
 * Empty value if list of pay rates for all locations should be returned.
 *
 * @get get
 * @var string
 */
  public $k_location = '';

  /**
 * 
 * Staff key.
 *
 * @get get
 * @var string
 * @deprecated It's necessary to use `uid_staff`.
 */
  public $k_staff = '';

  /**
 * Staff user ID.
 *
 * @get get
 * @var string
 */
  public $uid_staff = '';
}

?>