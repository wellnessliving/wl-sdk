<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list with all calendar days in specified month with
 * available and unavailable appointment booking schedule.
 */
class CalendarModel extends WlModelAbstract
{

  /**
   * List with all calendar days in specified month with
   * available and unavailable appointment booking schedule.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_date = null;

  /**
   * Date to determine what month to display.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get,result
   * @var string|null
   */
  public $dt_date = null;

  /**
   * Duration of the asset.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * Index of selected asset.
   *
   * <tt>null</tt> if not set yet. Or if asset is not on layout.
   *
   * @get get
   * @var int|null
   */
  public $i_index = null;

  /**
   * Staff gender.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_gender_staff = null;

  /**
   * Location ID to show what days are available for booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * Resource ID to show what days are available for booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * Service ID to show what days are available for booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * Staff ID to show what days are available for booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;

  /**
   * List of service add-ons. Serialized to be usable as model key.
   *
   * @get get
   * @var string
   */
  public $s_product = '';

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>