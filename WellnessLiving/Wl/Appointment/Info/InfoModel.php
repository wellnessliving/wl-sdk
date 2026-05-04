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
   * Next appointment data, or empty array if there are no appointments in the future:<dl>
   *   <dt>string `dt_date_local`</dt>
   *   <dd>Start date and time of the next appointment in local time in MySQL format.</dd>
   *   <dt>bool `has_note`</dt>
   *   <dd>`true` if visit has a note, `false` otherwise.</dd>
   *   <dt>int `i_duration`</dt>
   *   <dd>Duration of the next appointment in minutes.</dd>
   *   <dt>bool `can_view`</dt>
   *   <dd>`true` if employees (staff) can view this appointment, `false` otherwise.</dd>
   *   <dt>string `k_appointment`</dt>
   *
   *   <dt>string `k_visit`</dt>
   *   <dd>Visit key of next appointment.</dd>
   *   <dt>string `text_appointment_title`</dt>
   *   <dd>Title of next appointment.</dd>
   *   <dt>string `text_staff_name`</dt>
   *   <dd>Full staff name or empty if no staff assigned.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_next;

  /**
   * Previous appointment data, or empty array if there are no appointments in the past:<dl>
   *   <dt>string `dt_date_local`</dt>
   *   <dd>Start date and time of the previous appointment in local time in MySQL format.</dd>
   *   <dt>bool `has_note`</dt>
   *   <dd>`true` if visit has a note, `false` otherwise.</dd>
   *   <dt>int `i_duration`</dt>
   *   <dd>Duration of the previous appointment in minutes.</dd>
   *   <dt>bool `can_view`</dt>
   *   <dd>`true` if employees (staff) can view this appointment, `false` otherwise.</dd>
   *   <dt>string `k_appointment`</dt>
   *
   *   <dt>string `k_visit`</dt>
   *   <dd>Visit key of previous appointment.</dd>
   *   <dt>string `text_appointment_title`</dt>
   *   <dd>Title of previous appointment.</dd>
   *   <dt>string `text_staff_name`</dt>
   *   <dd>Full staff name or empty if no staff assigned.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_previous;

  /**
    * List of questions and answers:<dl>
    *   <dt>int `i_size`</dt><dd> Size of rows for answer.</dd>
    *   <dt>bool `is_multiple`</dt><dd> `true` if `i_size` greater than 1, `false` otherwise. Can be empty if answer is loaded.</dd>
    *   <dt>string `s_answer`</dt><dd> Answer for `s_question`.</dd>
    *   <dt>string `s_key`</dt><dd> Answer key.</dd>
    *   <dt>string `s_question`</dt><dd> Question.</dd>
    * </dl>
    *
    * @get result
    * @var array[]
   */
  public $a_question = [];

  /**
   * List of assets which are used by this appointment.
   *
   * @get result
   * @var array[]
   */
  public $a_resource;

  /**
   * List of appointment add-ons. Every element has next keys:<dl>
   *   <dt>array `a_login_product`</dt>
   *   <dd>List of purchased products. Empty if no products purchased.</dd>
   *   <dt>null `k_login_product`</dt>
   *   <dd>Deprecated, always `null`.</dd>
   *   <dt>string `k_shop_product`</dt>
   *   <dd>Primary key of add-on.</dd>
   *   <dt>string `k_shop_product_option`</dt>
   *
   *   <dt>string `m_amount`</dt>
   *   <dd>Price that it adds to an appointment.</dd>
   * </dl>
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