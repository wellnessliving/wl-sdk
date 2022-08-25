<?php 

namespace WellnessLiving\Wl\Holiday;

use WellnessLiving\WlModelAbstract;

/**
 * Information about all location/business holidays for a given business.
 */
class BulkBusinessHolidayModel extends WlModelAbstract
{
  /**
   * Array of all business' locations closed day data by holiday keys {@link \Wl\Holiday\HolidayApi::$dl_work}.
   *
   * @get result
   * @var array List of holidays. Values are arrays of holidays as follows:
<ul>
  <li>array <var>a_class</var> List of affected classes, keys are class IDs.</li>
  <li>array <var>a_class_only</var> List of affected classes, keys are class IDs.</li>
  <li>array <var>a_event_only</var> List of affected events, keys are class IDs.</li>
  <li>array <var>a_service</var> List of affected services, keys are service IDs.</li>
  <li>string <var>dt_end</var> Date of the end of the holiday.</li>
  <li>string <var>dt_start</var> Date of the start of the holiday.</li>
  <li>int <var>is_class_all</var>'1' if all classes are selected to cancel, '0' - otherwise.</li>
  <li>int <var>is_event_all</var>'1' if all events are selected to cancel, '0' - otherwise.</li>
  <li>int <var>is_service_all</var>'1' if all services are selected to cancel, '0' - otherwise.</li>
  <li>int <var>k_business</var> Business ID.</li>
  <li>int <var>k_holiday</var> Holiday ID.</li>
  <li>int <var>k_location</var> Location ID.</li>
  <li>int <var>k_market</var> Market ID.</li>
  <li>string <var>s_title</var> Name of the holiday.</li>
</ul>
   */
  public $a_business_holidays;

  /**
   * Business key.
   * Primary key in {@link \RsBusinessSql} table.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>