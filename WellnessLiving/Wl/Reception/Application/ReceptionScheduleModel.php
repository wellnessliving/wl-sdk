<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Service\ServiceSid;

/**
 * Shows the schedule for the check-in process.
 *
 * Returns the HTML code that is normally presented for the check-in process.
 */
class ReceptionScheduleModel extends WlModelAbstract
{
  /**
   * A list of sessions to display with the following fields:
   *
   * @get result
   * @var array
   */
  public $a_class = [];

  /**
   * Data for the confirmation screen with the following fields:
   *
   * @post result
   * @var array
   */
  public $a_confirmation_data = [];

  /**
   * All types of services that appear in the schedule.
   * Keys are constants from {@link ServiceSid}. Values are the HTML classes associated with that service.
   *
   * @get result
   * @var array
   */
  public $a_schedule_class_all;

  /**
   * The date and time of the visit in UTC and MySQL format.
   *
   * @post post
   * @var string
   */
  public $dtu_date = '';

  /**
   * The confirmation template to be shown in the Self Check-In Web App for the selected user.
   *
   * @post result
   * @var string
   */
  public $html_confirmation = '';

  /**
   * The schedule to be shown in the Self Check-In Web App for the selected user.
   *
   * @get result
   * @var string
   */
  public $html_schedule = '';

  /**
   * The key of the appointment to check in.
   *
   * If `null`, this is class visit or gym visit.
   *
   * @post post
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * The business key, where the Self Check-In Web App is started.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the class schedule to check in.
   *
   * If `null`, this is an appointment visit or gym visit.
   *
   * @post post
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The location key, where the Self Check-In Web App is started.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * The visit key, which was added or checked in.
   *
   * @post result
   * @var string
   */
  public $k_visit = '';

  /**
   * The key of the Self Check-In Web App.
   *
   * 
   * @get get
   * @post get
   * @var string
   */
  public $s_secret = '';

  /**
   * The key of the user to show the schedule for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>