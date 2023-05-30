<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information about a specified visit.
 */
class PageElementModel extends WlModelAbstract
{
  /**
   * A list of staff members involved in the visit.
   * Each element is an array with the following elements:
   * <ul><li>String `k_staff` The staff member’s ID.</li>
   * <li>String `s_family` The surname of the staff member.</li>
   * <li>String `s_name` The first name of the staff member.</li></ul>
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * The latest date and time for when the visit can be canceled without penalty.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_cancel = null;

  /**
   * The date and time of the visit in UTC.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_global = null;

  /**
   * The date and time of the visit in the local time zone.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * The special instructions for the service.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $html_special = null;

  /**
   * The scheduled duration of the visit.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $i_duration = null;

  /**
   * The note type. This will be set to `null` if notes aren't allowed.
   * This is one of the {@link WlVisitNoteSid} constants.
   *
   * This will be `null` if notes aren't allowed.
   *
   * @get result
   * @var int|null
   */
  public $id_note = null;

  /**
   * The virtual provider ID. One of the {@link \WellnessLiving\Wl\Virtual\VirtualProviderSid} constants.
   *
   * This will be `null` for non-virtual services.
   *
   * @get result
   * @var int|null
   */
  public $id_virtual_provider = null;

  /**
   * The visit type. One of the {@link VisitSid} constants.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $id_visit = null;

  /**
   * If `true`, then this visit is ready to be checked in. If `false`, then this visit can't be checked in.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_checkin = null;

  /**
   * This will be `true` if clients can cancel the session. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_enable_client_cancel = null;

  /**
   * If `true`, then this visit is a part of a larger event. If `false`, then this visit is an individual session.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_event = null;

  /**
   * The appointment ID.
   * This will be set only if the visit is an appointment. If the visit is a class or event, this will be `null`.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * The class period ID. This will be set only if the visit is a class or an event.
   * If the visit is an appointment, this will be `null`.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The location ID.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_location = null;

  /**
   * The sale item key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_visit = null;

  /**
   * The name of class or service.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_title = null;

  /**
   * The user ID.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $uid = null;
}

?>