<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list with all calendar days in a specified month with
 * available and unavailable appointment booking schedule.
 */
class CalendarModel extends WlModelAbstract
{
  /**
   * A list with all calendar days in specified month with
   * available and unavailable appointment booking schedule.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_date = null;

  /**
   * The date to determine what month to display.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get,result
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The duration of the asset.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * An index of the selected asset.
   *
   * <tt>null</tt> if not set yet or if asset isn't on layout.
   *
   * @get get
   * @var int|null
   */
  public $i_index = null;

  /**
   * The staff member's gender.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_gender_staff = null;

  /**
   * The location ID to show what days are available for booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The resource ID to show what days are available for booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * The service ID to show what days are available for booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The staff ID to show what days are available for booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;

  /**
   * A list of service add-ons. Serialized to be usable as model key.
   *
   * @get get
   * @var string
   */
  public $s_product = '';

  /**
   * The user ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>