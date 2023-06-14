<?php

namespace WellnessLiving\Wl\Appointment\Book\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about staff members for the current service.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of staff members.
   *
   * This will be `null` if not set yet.
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
   * <b>1</b> - returns service categories that have no staff members available to conduct them.
   *
   * <b>0</b> - returns only service categories that have staff members available to conduct them.
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
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The ID of a service for which to show information.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;
}

?>