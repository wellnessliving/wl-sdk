<?php

namespace WellnessLiving\Wl\Appointment\Book\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about staff members for the current service.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of staff members.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * Date/time of appointment selected by user. In location timezone.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Determines that staff list has male and female members.
   *
   * @get result
   * @var bool
   */
  public $is_gender_different = false;

  /**
   * <tt>true</tt> - return service categories which has no staff members to conduct it;
   * <tt>false</tt> - return only service categories which has staff members.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = false;

  /**
   * Whether you want to select gender for the appointment.
   *
   * @get result
   * @var bool
   */
  public $has_gender = false;

  /**
   * Whether you want to select staff member for the appointment.
   *
   * @get result
   * @var bool
   */
  public $has_staff = false;

  /**
   * ID of a location.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * ID of a service to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;
}

?>