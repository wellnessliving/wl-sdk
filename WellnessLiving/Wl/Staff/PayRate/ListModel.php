<?php

namespace WellnessLiving\Wl\Staff\PayRate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * List of staff pay rates for the business.
 *
 * @method WlModelRequest get() This method is called to process GET query.
 */
class ListModel extends WlModelAbstract
{
  /**
   * Pay rate list:
   *
   * <dl>
   *   <dt>int `id_staff_pay`</dt>
   *
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
   *     Location key. Used only for pay
   * rates with <var>id_staff_pay</var>
   *   </dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>
   *     TODO wl-80218: Remove this field after third parties do not use it.
   *
   * deprecated Returned only for applications from legacy allow-list. Use <var>uid_staff</var>.
   *   </dd>
   * 
   *   <dt>string `k_staff_pay`</dt>
   *
   * 
   *   <dt>string `text_staff`</dt>
   *   <dd>Name of staff member.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Pay rate title.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff user ID.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_pay_rate;

  /**
   * Pay rate type.
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
   * TODO wl-80218: Remove this field after third parties do not use it.
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