<?php

namespace WellnessLiving\Wl\Appointment\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;

/**
 * Appointment information.
 *
 * /
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Next appointment data, or empty array if there no appointments in future:<dl>
   *   <dt>string <var>dt_date_local</var></dt>
   *   <dd>Start date and time of the next appointment in local time in MySQL format.</dd>
   *   <dt>bool <var>has_note</var></dt>
   *   <dd>`true` if visit has a note, `false` otherwise.</dd>
   *   <dt>int <var>i_duration</var></dt>
   *   <dd>Duration of the next appointment in minutes.</dd>
   *   <dt>bool <var>can_view</var></dt>
   *   <dd>`true` if employees (staff) can view this appointment, `false` otherwise.</dd>
   *   <dt>string <var>k_appointment</var></dt>
   *
   *   <dt>string <var>k_visit</var></dt>
   *   <dd>Visit key of next appointment.</dd>
   *   <dt>string <var>text_appointment_title</var></dt>
   *   <dd>Title of next appointment.</dd>
   *   <dt>string <var>text_staff_name</var></dt>
   *   <dd>Full staff name or empty if no staff assigned.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_next;

  /**
   * Previous appointment data, or empty array if there no appointments in past:<dl>
   *   <dt>string <var>dt_date_local</var></dt>
   *   <dd>Start date and time of the previous appointment in local time in MySQL format.</dd>
   *   <dt>bool <var>has_note</var></dt>
   *   <dd>`true` if visit has a note, `false` otherwise.</dd>
   *   <dt>int <var>i_duration</var></dt>
   *   <dd>Duration of the previous appointment in minutes.</dd>
   *   <dt>bool <var>can_view</var></dt>
   *   <dd>`true` if employees (staff) can view this appointment, `false` otherwise.</dd>
   *   <dt>string <var>k_appointment</var></dt>
   *
   *   <dt>string <var>k_visit</var></dt>
   *   <dd>Visit key of previous appointment.</dd>
   *   <dt>string <var>text_appointment_title</var></dt>
   *   <dd>Title of previous appointment.</dd>
   *   <dt>string <var>text_staff_name</var></dt>
   *   <dd>Full staff name or empty if no staff assigned.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_previous;

  /**
    * List of questions and answers:<dl>
    *   <dt>int <var>i_size</var></dt><dd> Size of rows for answer.</dd>
    *   <dt>bool <var>is_multiple</var></dt><dd> `true` if <var>i_size</var> greater than 1, `false` otherwise. Can be empty if answer is loaded.</dd>
    *   <dt>string <var>s_answer</var></dt><dd> Answer for <var>s_question</var>.</dd>
    *   <dt>string <var>s_key</var></dt><dd> Answer key.</dd>
    *   <dt>string <var>s_question</var></dt><dd> Question.</dd>
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
   *   <dt>array <var>a_login_product</var></dt>
   *   <dd>List of purchased products. Empty if no products purchased.</dd>
   *   <dt>null <var>k_login_product</var></dt>
   *   <dd>Deprecated, always `null`.</dd>
   *   <dt>string <var>k_shop_product</var></dt>
   *   <dd>Primary key of add-on.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *
   *   <dt>string <var>m_amount</var></dt>
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
   * @var string
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