<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\Wl\Book\WlBookModeSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\RsAppointmentPaySid;

/**
 * Model to complete booking appointment.
 */
class FinishModel extends WlModelAbstract
{
  /**
   * A list of answers for the questions from {@link Wl_Appointment_Book_Payment_PaymentModel.a_question}.
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
   * IDs of visits.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * WellnessLiving mode type, one of {@link \Wl\Mode\ModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * Payment type for the appointment, one of {@link RsAppointmentPaySid} constants.
   *
   * @post get
   * @var string|null
   */
  public $id_pay = RsAppointmentPaySid::NONE;

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