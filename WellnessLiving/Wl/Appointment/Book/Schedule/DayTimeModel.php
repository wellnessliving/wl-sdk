<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of information about available appointment booking schedule.
 */
class DayTimeModel extends WlModelAbstract
{
  /**
   * Array with schedule of available appointment booking time.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_time = null;

  /**
   * Date to show available appointment booking schedule.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
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
   * <tt>true</tt> - return service categories which has no staff members to conduct it;
   * <tt>false</tt> - return only service categories which has staff members.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = false;

  /**
   * Location ID to show available appointment booking schedule.
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
   * Service ID to show available appointment booking schedule.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * Staff ID to show available appointment booking schedule..
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