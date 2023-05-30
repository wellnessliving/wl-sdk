<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of all calendar days in a specified month with
 * available and unavailable appointment bookings in the schedule.
 */
class CalendarModel extends WlModelAbstract
{
  /**
   * A list with all calendar days in the specified month with
   * available and unavailable appointment bookings in the schedule.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_date = null;

  /**
   * The date to determine what month to display.
   *
   * This will be `null` if not set yet.
   *
   * @get get,result
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The duration of the asset.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * An index of the selected asset.
   *
   * This will be `null` if not set yet or if the asset isn't on the layout.
   *
   * @get get
   * @var int|null
   */
  public $i_index = null;

  /**
   * The staff member's gender.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_gender_staff = null;

  /**
   * The location ID to show what days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The resource ID to show what days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * The service ID to show what days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The staff ID to show what days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;

  /**
   * A list of service add-ons, serialized to be usable as a model key.
   *
   * @get get
   * @var string
   */
  public $s_product = '';

  /**
   * The user ID.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>