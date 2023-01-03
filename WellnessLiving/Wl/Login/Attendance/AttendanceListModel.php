<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about the clients attending a class, appointment, or event session.
 */
class AttendanceListModel extends WlModelAbstract
{
  /**
   * The list of clients in the active attendance list who have not confirmed or cancelled.
   * Each element is an array with the following fields:
   * <dl>
   *   <dt>bool <var>can_profile</var></dt>
   *   <dd>If `true`, the current user can access this client’s profile.</dd>
   *   <dt>string <var>html_age</var></dt>
   *   <dd>The client’s age.</dd>
   *   <dt>string <var>html_book_by</var></dt>
   *   <dd>The name of the person who booked this visit.</dd>
   *   <dt>string <var>html_tooltip_book_by</var></dt>
   *   <dd>Who, when, and where this visit was booked.</dd>
   *   <dt>string <var>id_visit</var></dt>
   *   <dd>The visit status, one of the \Wl\Visit\VisitSid constants.</dd>
   *   <dt>string <var>k_visit</var></dt>
   *   <dd>The key of the visit.</dd>
   *   <dt>array <var>[o_purchase_item]</var></dt>
   *   <dd>The purchase used to pay for the session./dd>
   *   <dt>string <var>text_firstname</var></dt>
   *   <dd>The client’s first name.</dd>
   *   <dt>string <var>text_lastname</var></dt>
   *   <dd>The client’s last name.</dd>
   *   <dt>string <var>text_visit_status_class</var></dt>
   *   <dd>The class visit status.</dd>
   *   <dt>string <var>text_visit_status_icon</var></dt>
   *   <dd>The icon to use for the class visit status.</dd>
   *   <dt>string <var>text_wearable</var></dt>
   *   <dd>The wearable device ID.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The client’s user key.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_list_active = [];

  /**
   * The list of clients who have confirmed their attendance.
   *
   * @get result
   * @var array
   */
  public $a_list_confirm = [];

  /**
   * The list of clients who are on the waiting list.
   *
   * @get result
   * @var array
   */
  public $a_list_wait = [];

  /**
   * The date of the class or event session.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = null;

  /**
   * The maximum capacity of this class or event session.
   *
   * @get result
   * @var int
   */
  public $i_capacity = null;

  /**
   * If <tt>true</tt> then return the purchase used to pay for session.
   * Otherwise <tt>false</tt>, do not return any purchase information.
   *
   * @get get
   * @var bool
   */
  public $is_purchase_info_return=false;

  /**
   * The appointment key. Not used if requesting information for a class or event session.
   *
   * @get get
   * @var string
   */
  public $k_appointment = null;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = null;

  /**
   * The class period key. Not used if requesting information for an appointment.
   *
   * @get get
   * @var string
   */
  public $k_class_period = null;

  /**
   * The Location key.
   *
   * @get result
   * @var string
   */
  public $k_location = null;
}

?>