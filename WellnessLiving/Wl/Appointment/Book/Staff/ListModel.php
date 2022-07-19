<?php

namespace WellnessLiving\Wl\Appointment\Book\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about staff members for the current service.
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
   * The date/time of the appointment selected by user, returned in the location's time zone.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Determines if the staff list has male and female members.
   *
   * @get result
   * @var bool
   */
  public $is_gender_different = false;

  /**
   * <tt>1</tt> - returns service categories which have no staff members available to conduct them;
   * <tt>0</tt> - returns only service categories which have staff members available to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = 0;

  /**
   * Determines whether to select the staff member's gender for the appointment.
   *
   * @get result
   * @var bool
   */
  public $has_gender = false;

  /**
   * Determines whether to select staff member(s) for the appointment.
   *
   * @get result
   * @var bool
   */
  public $has_staff = false;

  /**
   * The ID of a location.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The ID of a service for which to show information.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;
}

?>