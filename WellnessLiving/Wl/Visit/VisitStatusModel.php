<?php

namespace WellnessLiving\Wl\Visit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Views or changes the visit status.
 */
class VisitStatusModel extends WlModelAbstract
{
  /**
   * An array of service resources.
   *
   * The key refers to the `k_resource_type`.
   * The value is an array with the following key: `k_resource`.
   * The array element contains a nested array with `i_index` and `i_quantity`.
   *
   * This will be empty if not set yet.
   *
   * @get result
   * @var ?array[]
   */
  public $a_resource = [];

  /**
   * The list of keys of staff members that conduct the class.
   *
   * @get result
   * @var string[]
   */
  public $a_staff = [];

  /**
   * The visit date and time in UTC and in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dt_date = '';

  /**
   * The visit date in the location's time zone and in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dtl_date = '';

  /**
   * The service duration (in minutes).
   *
   * @get result
   * @var int
   */
  public $i_duration = 0;

  /**
   * The client's place in a waiting list.
   *
   * @get result
   * @var int
   */
  public $i_wait_spot = 0;

  /**
   * The source of the visit or the visit change.
   * One of the {@link ModeSid} constants.
   * If you're unsure about the value to use, keep the default value.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_mode = \WellnessLiving\Wl\Mode\ModeSid::SPA_BACKEND;

  /**
   * The status of the visit.
   * One of the {@link WlVisitSid} constants.
   *
   * @get result
   * @post post
   * @var string
   */
  public $id_visit = '0';

  /**
   * The status of the visit from which the transition is made. One of the {@link WlVisitSid} constants.
   *
   * If the visit status is passed, it will be used to check with the actual status in the database.
   * If `null`, the visit hasn't yet passed.
   *
   * If the status of this parameter is out of date, the API call will refresh it.
   *
   * @post post,error
   * @var ?string
   */
  public $id_visit_from = null;

  /**
   * The staff decision to charge (or not charge) a penalty when a client meets late cancel/no-show requirements.
   *
   * If `true`, a late cancel fee should be charged. Otherwise, this will be `false`.
   *
   * @post get
   * @var bool
   */
  public $is_charge_fee = true;

  /**
   * Determines whether the visit is from an event.
   *
   * @get result
   * @var bool
   */
  public $is_event = false;

  /**
   * The business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The class key.
   *
   * @get result
   * @var string
   */
  public $k_class = '';

  /**
   * The class period key.
   *
   * @get result
   * @var string
   */
  public $k_class_period = '';

  /**
   * The email pattern key.
   * If `null`, the live email pattern shouldn't be used.
   *
   * @post get
   * @var string|null
   */
  public $k_mail_pattern_live = null;

  /**
   * The service key.
   * If 'null', the visit isn't from an appointment.
   *
   * @get result
   * @var ?string
   */
  public $k_service = null;

  /**
   * The key of the staff providing the appointment.
   * If `null`, the visit isn't from an appointment (for example, the visit is from an asset).
   *
   * @get result
   * @var string|null
   */
  public $k_staff = null;

  /**
   * The time zone key.
   *
   * `null` if not set then use default timezone client.
   *
   * @get get
   * @var null|string
   */
  public $k_timezone = null;

  /**
   * The visit key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_visit = '0';

  /**
   * The .ics file for adding the service to a phone calendar.
   *
   * @get result
   * @var string
   */
  public $s_calendar_file_content = '';

  /**
   * The text abbreviation of the time zone.
   *
   * @get result
   * @var string
   */
  public $text_abbr_timezone = '';

  /**
   * The full address of the location for the visit (not the name of the location).
   *
   * @get result
   * @var string
   */
  public $text_location = '';

  /**
   * The reason the visit was canceled.
   *
   * @post get
   * @var string
   */
  public $text_reason = '';

  /**
   * The full name of the staff member who conducts this visit.
   * If there are several staff members conducting the visit, their names will all be listed and separated by commas.
   *
   * @get result
   * @var string
   */
  public $text_staff = '';

  /**
   * The service title.
   *
   * @get result
   * @var string
   */
  public $text_title = '';
}

?>