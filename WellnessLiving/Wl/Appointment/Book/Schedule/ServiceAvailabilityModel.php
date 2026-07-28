<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of information about the booking schedule for appointment.
 *
 * @method WlModelRequest get() Retrieves a list of available appointment booking schedule.  Returns list of staff that can provide selected appointment. Each staff data contains list of dates from selected period when appointment can be booked. Each date contains list of available appointment start times.
 */
class ServiceAvailabilityModel extends WlModelAbstract
{
  /**
   * An array with a schedule of available appointment booking times.
   *
   * Each record contains availability data of one staff and have next structure:
   *
   * <dl>
   *   <dt>string[][] `a_availability`</dt>
   *   <dd>Availability data of the staff. Keys are dates and values are lists of available appointment start times.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Staff name.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff user key.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_time;

  /**
   * End date of search period in MySQL format, in location time zone.
   *
   * @get get
   * @var string
   */
  public $dl_end = '';

  /**
   * Start date of search period in MySQL format, in location time zone.
   *
   * @get get
   * @var string
   */
  public $dl_start = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Service key.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>