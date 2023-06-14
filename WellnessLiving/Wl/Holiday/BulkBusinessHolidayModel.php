<?php 

namespace WellnessLiving\Wl\Holiday;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint displaying information about all location/business holidays for a given business.
 */
class BulkBusinessHolidayModel extends WlModelAbstract
{
  /**
   * An array consisting of the business's closed day data for all locations by holiday keys {@link \Wl\Holiday\HolidayApi::$dl_work}.
   *
   * @get result
   * @var array List of holidays. Values are arrays of holidays as follows:
   * <ul>
   *   <li>array <var>a_class</var> A list of affected classes. Keys are class IDs.</li>
   *   <li>array <var>a_class_only</var> A list of affected classes. Keys are class IDs.</li>
   *   <li>array <var>a_event_only</var> A list of affected events. Keys are class IDs.</li>
   *   <li>array <var>a_service</var> A list of affected services. Keys are service IDs.</li>
   *   <li>string <var>dt_end</var> The end date of the holiday.</li>
   *   <li>string <var>dt_start</var> The start date of the holiday.</li>
   *   <li>int <var>is_class_all</var>'1' if all classes are selected to cancel, '0' if otherwise.</li>
   *   <li>int <var>is_event_all</var>'1' if all events are selected to cancel, '0' if otherwise.</li>
   *   <li>int <var>is_service_all</var>'1' if all services are selected to cancel, '0' if otherwise.</li>
   *   <li>int <var>k_business</var> The business ID.</li>
   *   <li>int <var>k_holiday</var> The holiday ID.</li>
   *   <li>int <var>k_location</var> The location ID.</li>
   *   <li>int <var>k_market</var> The market ID.</li>
   *   <li>string <var>s_title</var> The name of the holiday.</li>
   * </ul>
   */
  public $a_business_holidays;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>