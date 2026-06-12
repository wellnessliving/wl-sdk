<?php

namespace WellnessLiving\Wl\Holiday;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint displaying information about all location/business holidays for a given business.
 */
class BulkBusinessHolidayModel extends WlModelAbstract
{
  /**
   * An array consisting of the business's closed day data for all locations by holiday keys {@link HolidayModel::$dl_work}.
   *
   * List of holidays.
   *
   * <dl>
   *   <dt>true[] `a_class`</dt>
   *   <dd>
   *     List of effected classes, keys are class keys.
   * Values always `true`.
   * *   </dd>
   * 
   *   <dt>true[] `a_class_only`</dt>
   *   <dd>List of effected classes, keys are class keys.
   * Values always `true`.
   * Used in schedule widget.</dd>
   * 
   *   <dt>true[] `a_event_only`</dt>
   *   <dd>List of effected events, keys are class keys.
   * Values always `true`.
   * Used in schedule widget.</dd>
   * 
   *   <dt>string `dt_end`</dt>
   *   <dd>Date of the end of the holiday.</dd>
   * 
   *   <dt>string `dt_start`</dt>
   *   <dd>Date of the start of the holiday.</dd>
   * 
   *   <dt>int `is_class_all`</dt>
   *   <dd>`1` if all classes are selected to cancel, `0` - otherwise.</dd>
   * 
   *   <dt>int `is_event_all`</dt>
   *   <dd>`1` if all events are selected to cancel, `0` - otherwise.</dd>
   * 
   *   <dt>int `is_service_all`</dt>
   *   <dd>`1` if all services are selected to cancel, `0` - otherwise.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. 
   * 
   *   <dt>string `k_holiday`</dt>
   *   <dd>Holiday key. 
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key. 
   * 
   *   <dt>string `k_market`</dt>
   *   <dd>The market key. 
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Name of the holiday.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_business_holidays;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>