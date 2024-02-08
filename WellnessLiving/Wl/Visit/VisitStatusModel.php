<?php

namespace WellnessLiving\Wl\Visit;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint to view or change the visit status.
 */
class VisitStatusModel extends WlModelAbstract
{
  /**
   * Array of service resources.
   *
   * Key is the `k_resource_type`
   * Value is array with the following Key: `k_resource`,
   * Value is array with the resource's `i_index` and `i_quantity`.
   *
   * Empty if not set yet.
   *
   * @get result
   * @var ?array[]
   */
  public $a_resource = [];

  /**
   * List of staff member keys that instruct the class.
   *
   * @get result
   * @var string[]
   */
  public $a_staff = [];

  /**
   * Visit date and time in UTC and in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dt_date = '';

  /**
   * Visit date in the location's timezone and in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dtl_date = '';

  /**
   * Service duration (in minutes).
   *
   * @get result
   * @var int
   */
  public int $i_duration = 0;

  /**
   * Place in a waiting list.
   *
   * @get result
   * @var int
   */
  public $i_wait_spot = 0;

  /**
   * The source of the visit or the visit change.
   * One of the {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   * If unsure about the value to use, keep the default value.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_mode = \WellnessLiving\Wl\Mode\ModeSid::SPA_BACKEND;

  /**
   * The status of the visit.
   * One of the {@link \WellnessLiving\Wl\Visit\VisitSid} constants.
   *
   * @get result
   * @post post
   * @var string
   */
  public $id_visit = '0';

  /**
   * The status of the visit from which the transition is made. One of the {@link \WellnessLiving\Wl\Visit\VisitSid} constants.
   *
   * If visit status is passed it will be used to check with actual status in database.
   * <tt>null</tt> means not passed.
   *
   * If the status from is expired this field will be filled with actual status in database.
   *
   * @post post
   * @var ?string
   */
  public $id_visit_from = null;

  /**
   * A staff decision to charge or not charge a penalty when a customer meets late cancel/no-show requirements.
   * If `true` a late cancel fee should be charged.
   * If `false` a late cancel fee should not be charged.
   *
   * @post get
   * @var bool
   */
  public $is_charge_fee = true;

  /**
   * Whether the visit is from an event.
   *
   * @get result
   * @var bool
   */
  public $is_event = false;

  /**
   * The key of the business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the class.
   *
   * @get result
   * @var string
   */
  public $k_class = '';

  /**
   * The key of the class period.
   *
   * @get result
   * @var string
   */
  public $k_class_period = '';

  /**
   * The key of the mail pattern.
   * `null` when live mail pattern should not be used.
   *
   * @post get
   * @var string|null
   */
  public $k_mail_pattern_live = null;

  /**
   * The service key.
   * 'null' if visit is not from an appointment.
   *
   * @get result
   * @var ?string
   */
  public $k_service = null;

  /**
   * The key of the staff who provide appointment.
   * `null` if visit is not from appointment, for example visit is from asset.
   *
   * @get result
   * @var string|null
   */
  public $k_staff = null;

  /**
   * The key of the timezone.
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
   * ics file for adding service to phone calendar.
   *
   * @get result
   * @var string
   */
  public $s_calendar_file_content = '';

  /**
   * Text abbreviation of the timezone.
   *
   * @get result
   * @var string
   */
  public $text_abbr_timezone = '';

  /**
   * This is not the name of the location, this is the full address of the location for the visit.
   *
   * @get result
   * @var string
   */
  public $text_location = '';

  /**
   * The reason the visit was cancelled.
   *
   * @post get
   * @var string
   */
  public $text_reason = '';

  /**
   * The full name of the staff who conducts this visit,
   *  if there are several staffs, their names will be listed separated by commas.
   *
   * @get result
   * @var string
   */
  public $text_staff = '';

  /**
   * The title of the service.
   *
   * @get result
   * @var string
   */
  public $text_title = '';
}

?>