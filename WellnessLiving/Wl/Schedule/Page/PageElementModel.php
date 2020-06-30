<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;

/**
 * One element of a schedule.
 */
class PageElementModel extends WlModelAbstract
{
  /**
   * List of staff. Every element has next fields:
   * <ul><li>String <tt>k_staff</tt> Staff ID.</li>
   * <li>String <tt>s_family</tt> Staff surname.</li>
   * <li>String <tt>s_name</tt> Staff name.</li></ul>
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * Date to which book can be cancelled without penalty. In GMT.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_cancel = null;

  /**
   * Date in GMT.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_global = null;

  /**
   * Date in location timezone.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * Special instructions for service.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $html_special = null;

  /**
   * Duration (in minutes).
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $i_duration = null;

  /**
   * Type of note. One of the {@link WlVisitNoteSid} constants.
   *
   * <tt>null</tt> if notes not allowed.
   *
   * @get result
   * @var int|null
   */
  public $id_note = null;

  /**
   * ID of visit state. One of the {@link VisitSid} constants.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $id_visit = null;

  /**
   * Determines that current element of schedule can be check-in now.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_checkin = null;

  /**
   * <tt>true</tt> - this element belongs to whole event; <tt>false</tt> - belongs to class or to session event.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_event = null;

  /**
   * Appointment ID.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * Session ID.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Location ID.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_location = null;

  /**
   * ID of the sale item.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_visit = null;

  /**
   * Name of class or service.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_title = null;

  /**
   * User ID.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $uid = null;
}

?>