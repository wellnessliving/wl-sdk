<?php

namespace WellnessLiving\Wl\Appointment\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;

/**
 * Appointment information.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Next appointment data, or empty array if there are no appointments in the future:
   *
   * @get result
   * @var array
   */
  public $a_next;

  /**
   * Previous appointment data, or empty array if there are no appointments in the past:
   *
   * @get result
   * @var array
   */
  public $a_previous;

  /**
    * List of questions and answers:
    *
    * @get result
    * @var array[]
   */
  public $a_question = [];

  /**
   * List of assets used by this appointment. Each element contains: 
   *
   * @get result
   * @var array[]
   */
  public $a_resource;

  /**
   * List of appointment add-ons. Every element has next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_shop_product_option;

  /**
   * Date/time of appointment in location timezone.
   *
   * @get result
   * @var string
   */
  public $dt_date_local;

  /**
   * Appointment duration (in minutes).
   *
   * @get result
   * @var int|null
   */
  public $i_duration;

  /**
   * Index of booked asset.
   *
   * @get result
   * @var int|null
   */
  public $i_index;

  /**
   * Status of appointment payment. One of {@link WlAppointmentPaySid} constants.
   *
   * @get result
   * @var int
   */
  public $id_appointment_pay;

  /**
   * Class identifier to get information for.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Location key.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Purchased promotion which provides this appointment.
   *
   * @get result
   * @var string|null
   */
  public $k_login_promotion;

  /**
   * Asset key.
   *
   * @get result
   * @var string|null
   */
  public $k_resource;

  /**
   * Asset category key.
   *
   * @get result
   * @var string|null
   */
  public $k_resource_type;

  /**
   * Service key.
   *
   * @get result
   * @var string|null
   */
  public $k_service;

  /**
   * Service category key.
   *
   * @get result
   * @var string|null
   */
  public $k_service_category;

  /**
   * Purchased drop-in which provides this appointment.
   *
   * @get result
   * @var string|null
   */
  public $k_session_pass;

  /**
   * Staff member who conducts this appointment.
   *
   * Deprecated: returned only for a limited list of third-party apps to keep backward compatibility.
   * Use `uid_staff` instead.
   *
   * @get result
   * @var string
   */
  public $k_staff;

  /**
   * Title of the appointment.
   *
   * @get result
   * @var string
   */
  public $text_title;

  /**
   * User for whom this appointment was booked.
   *
   * @get result
   * @var string
   */
  public $uid_appointment;

  /**
   * Staff member who conducts this appointment.
   *
   * @get result
   * @var string|null
   */
  public $uid_staff;
}

?>