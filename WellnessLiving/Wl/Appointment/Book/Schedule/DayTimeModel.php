<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of information about available appointment booking schedule.
 */
class DayTimeModel extends WlModelAbstract
{
  /**
   * An array with a schedule of available appointment booking times.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_time = null;

  /**
   * The date to show available appointment booking schedule.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The duration of the asset booking.
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
   * <tt>null</tt> if not set yet. Or if asset is not on layout.
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
   * <tt>1</tt> - return service categories which have no staff members able to conduct them.
   * <tt>0</tt> - return only service categories which have staff members able to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = 0;

  /**
   * The location ID to show available appointment booking schedule.
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
   * The service ID to show available appointment booking schedule.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The staff ID to show available appointment booking schedule.
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