<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\Wl\Book\WlBookModeSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;

/**
 * Model to complete booking appointment.
 */
class FinishModel extends WlModelAbstract
{
  /**
   * A list of answers for the questions from {@link \WellnessLiving\Wl\Appointment\Book\Question\QuestionModel::a_question}.
   * Key - hash of the question, value - answer for the question.
   *
   * @post post
   * @var array
   */
  public $a_answer = [];

  /**
   * Booked appointments.
   *
   * @post result
   * @var array
   */
  public $a_appointment = [];

  /**
   * IDs of activity of books are made.
   *
   * @post result
   * @var array
   */
  public $a_login_activity_visit = [];

  /**
   * All data from the provider model {@link Wl_Appointment_Book_ProviderModel}.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_book_data = [];

  /**
   * Purchase item IDs from the database.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var array|null
   */
  public $a_purchase_item = null;

  /**
   * Data to create new user.
   * Specify if <var>$uid</var> is empty.
   * Must contain keys:
   * <dl><dt>string[] <var>a_note</var></dt><dd>List of notes to add to user.</dd>
   * <dt>string <var>text_mail</var></dt><dd>Mail.</dd>
   * <dt>string <var>text_name_first</var></dt><dd>First name.</dd>
   * <dt>string <var>text_name_last</var></dt><dd>Last name.</dd>
   * <dt>string <var>text_phone</var></dt><dd>Phone.</dd></dl>
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_user = [];

  /**
   * IDs of visits.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * WellnessLiving mode type, one of {@link WlBookModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * Payment type for the appointment, one of {@link WlAppointmentPaySid} constants.
   *
   * @post get
   * @var string|null
   */
  public $id_pay = WlAppointmentPaySid::NONE;

  /**
   * Appointment ID.
   * Set to rebook existing appointment.
   *
   * <tt>null</tt> to book new appointment.
   *
   * @post get
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * Business ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Location ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_location = null;

  /**
   * A sun paid for a deposit.
   *
   * @post post
   * @car string
   */
  public $m_pay = '';

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>