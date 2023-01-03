<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about a specified visit.
 */
class PageElementModel extends WlModelAbstract
{
  /**
   * A list of staff members involved in the visit.
   * Each element is an array with the following elements:
   * <ul><li>String <tt>k_staff</tt> The staff member’s ID.</li>
   * <li>String <tt>s_family</tt> The surname of the staff member.</li>
   * <li>String <tt>s_name</tt> The first name of the staff member.</li></ul>
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * The latest date and time for when the visit can be cancelled without penalty.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_cancel = null;

  /**
   * The date and time of the visit in UTC.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_global = null;

  /**
   * The date and time of the visit in the local time zone.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * The special instructions for service.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $html_special = null;

  /**
   * The scheduled duration of the visit.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $i_duration = null;

  /**
   * The note type; this will be set to `null` if notes are not allowed.
   * This is one of the {@link WlVisitNoteSid} constants.
   *
   * It is `null` if notes not allowed.
   *
   * @get result
   * @var int|null
   */
  public $id_note = null;

  /**
   * Virtual provider ID. One of {@link \Wl\Virtual\VirtualProviderSid} constants.
   *
   * It is `null` for not virtual classes.
   *
   * @get result
   * @var int|null
   */
  public $id_virtual_provider = null;

  /**
   * The visit type. One of the {@link VisitSid} constants.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $id_visit = null;

  /**
   * If `true`, then this visit is ready to be checked in. If `false` then this visit cannot be checked in.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_checkin = null;

  /**
   * <tt>true</tt> - if client can cancel session; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_enable_client_cancel = null;

  /**
   * If `true` then this visit is a part of a larger event. If `false` then this visit is an individual session.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_event = null;

  /**
   * The appointment ID.
   * This will be set only if the visit is an appointment. If the visit is a class or event, this will be `null`.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * The class period ID. This will be set only if the visit is a class or an event.
   * If the visit is an appointment, this is null.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Location ID.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_location = null;

  /**
   * The sale item key.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_visit = null;

  /**
   * The name of class or service.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_title = null;

  /**
   * User ID.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $uid = null;
}

?>