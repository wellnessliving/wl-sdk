<?php

namespace WellnessLiving\Wl\Appointment\Book\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about staff members for the current service.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of staff members with information about them.
   *
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * Can staff booked unavailable staff.
   *
   * @get result
   * @var bool
   */
  public $can_book_unavailable_staff;

  /**
   * The date/time of the appointment selected by user, in the location's time zone.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Determines whether to select the staff member's gender for the appointment.
   *
   * @get result
   * @var bool
   */
  public $has_gender;

  /**
   * Determines whether to select staff member(s) for the appointment.
   *
   * @get result
   * @var bool
   */
  public $has_staff;

  /**
   * User role by whom this api called.
   * For different roles different results might be generated.
   *
   * @get get
   * @var int
   */
  public $id_role = 2;

  /**
   * Determines if the staff list has male and female members.
   *
   * @get result
   * @var bool
   */
  public $is_gender_different;

  /**
   * `true` - returns service categories that have no staff members available to conduct them.
   * `false` - returns only service categories that have staff members available to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = false;

  /**
   * Key of appointment which must be ignored when searches available staff.
   *
   * @get get
   * @var string
   */
  public $k_appointment_ignore = '0';

  /**
   * The key of the location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of a service for which to show information.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * User's timezone primary key in {@link \AGeoTimezoneSql} table.
   *
   * <tt>null</tt> until initialized or to use location timezone.
   *
   * @get get
   * @var string|null
   */
  public $k_timezone;

  /**
   * Key of user for whom the service is booking, primary key in {@link \PassportLoginSql} table.
   *
   * `null` when not set.
   *
   * @get get
   * @var string|null
   */
  public $uid;
}

?>