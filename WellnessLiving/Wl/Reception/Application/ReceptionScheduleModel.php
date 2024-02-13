<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Shows schedule for check in process.
 *
 * Returns html code as we have ready functionality for this and want to save time avoiding re-building it into API and
 * javascript generation.
 */
class ReceptionScheduleModel extends WlModelAbstract
{
  /**
   * List of sessions to display. Contains:
   * <dl>
   *   <dt>array <var>a_resources_shared</var></dt>
   *   <dd>List of shared resources. Contains:<dl>
   *       <dt>string <var>k_resource</var></dt><dd>Resource key.</dd>
   *       <dt>string <var>s_title</var></dt><dd>Resource title.</dd>
   *   </dl></dd>
   *   <dt>array <var>a_staff_all</var></dt>
   *   <dd>List of staff members instructing. Contains:<dl>
   *       <dt>string <var>s_name_full</var></dt><dd>Full name of the staff member.</dd>
   *   </dl></dd>
   *   <dt>string <var>dtu_date</var></dt>
   *   <dd>Date of the session.</dd>
   *   <dt>string <var>html_class_js</var></dt>
   *   <dd>Javascript classes to display icon depending on type of service.</dd>
   *   <dt>int <var>i_duration</var></dt>
   *   <dd>Duration of the session in minutes.</dd>
   *   <dt>int <var>id_service</var></dt>
   *   <dd>service ID. One of {@link \WellnessLiving\Wl\WlServiceSid}</dd>
   *   <dt>bool <var>is_auto</var></dt>
   *   <dd>`true` if the session can be checked in automatically, `false` otherwise.</dd>
   *   <dt>string|null <var>k_appointment</var></dt>
   *   <dd>Appointment key. `null` if not an appointment.</dd>
   *   <dt>string|null <var>k_class_period</var></dt>
   *   <dd>Class period key. `null` if not a class or event.</dd>
   *   <dt>string|null <var>k_visit</var></dt>
   *   <dd>Visit key if the session has been checked in, `null` otherwise.</dd>
   *   <dt>string <var>s_class</var></dt>
   *   <dd>Name of the service.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>Duration of the session, formatted by business configuration.</dd>
   *   <dt>string <var>s_time</var></dt>
   *   <dd>Time the session takes place.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_class = [];

  /**
   * Date and time in UTC in MySQL format of the visit.
   *
   * @post post
   * @var string
   */
  public $dtu_date = '';

  /**
   * Confirmation template to be shown in Self Check In web application for selected user.
   *
   * @post result
   * @var string
   */
  public $html_confirmation = '';

  /**
   * Schedule to be shown in Self Check In web application for selected user.
   *
   * @get result
   * @var string
   */
  public $html_schedule = '';

  /**
   * Key of the appointment to check in.
   *
   * `null` if this is class visit or gym visit.
   *
   * @post post
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * Key of the business, where Check In application is started.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the class schedule to check in.
   *
   * `null` if this is appointment visit or gym visit.
   *
   * @post post
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Key of the location, where Check In application is started.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * Key of the visit, which was added or checked in.
   *
   * @post result
   * @var string
   */
  public $k_visit = '';

  /**
   * Key of the Check In application.
   *
   * @get get
   * @post get
   * @var string
   */
  public $s_secret = '';

  /**
   * Key of the user to show schedule for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>