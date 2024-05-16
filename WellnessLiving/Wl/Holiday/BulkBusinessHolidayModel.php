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
   * List of holidays. Values are arrays of holidays as follows:
   * <dl>
   *   <dt>array <var>a_class</var></dt>
   *   <dd>A list of affected classes. Keys are class keys.</dd>
   *   <dt>array <var>a_class_only</var></dt>
   *   <dd>A list of affected classes. Keys are class keys.</dd>
   *   <dt>array <var>a_event_only</var></dt>
   *   <dd>A list of affected events. Keys are event keys.</dd>
   *   <dt>array <var>a_service</var></dt>
   *   <dd>A list of affected services. Keys are service keys.</dd>
   *   <dt>string <var>dt_end</var></dt>
   *   <dd>The end date of the holiday.</dd>
   *   <dt>string <var>dt_start</var></dt>
   *   <dd>The start date of the holiday.</dd>
   *   <dt>int <var>is_class_all</var></dt>
   *   <dd>'1' if all classes are selected to cancel, '0' if otherwise.</dd>
   *   <dt>int <var>is_event_all</var></dt>
   *   <dd>'1' if all events are selected to cancel, '0' if otherwise.</dd>
   *   <dt>int <var>is_service_all</var></dt>
   *   <dd>'1' if all services are selected to cancel, '0' if otherwise.</dd>
   *   <dt>int <var>k_business</var></dt>
   *   <dd>The business key.</dd>
   *   <dt>int <var>k_holiday</var></dt>
   *   <dd>The holiday key.</dd>
   *   <dt>int <var>k_location</var></dt>
   *   <dd>The location key.</dd>
   *   <dt>int <var>k_market</var></dt>
   *   <dd>The market key.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The name of the holiday.</dd>
   * </dl>
   *
   * @get result
   * @var array
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