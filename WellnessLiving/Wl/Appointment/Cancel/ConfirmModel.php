<?php

namespace WellnessLiving\Wl\Appointment\Cancel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\Policy\ChargeSid;
use WellnessLiving\Wl\RsMailSid;
use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * Data for appointment cancellation confirm.
 *
 * @method WlModelRequest get() Returns data for appointment cancellation confirm.  Validates access to the appointment and business, then loads the notification pattern,  cancellation status, and blame or fee information for the appointment being cancelled. For  recurring appointments, also loads the date range and the list of individual appointments  available for cancellation.
 * @method WlModelRequest post() Cancels appointment.  Validates access to the appointment and business, then saves the notification pattern for the  cancellation. For recurring appointments, cancels every appointment in the selected date  range through an asynchronous visit change, optionally records the cancellation reason, and  removes the repeat-generation task when an entire endless series is cancelled. For a single  appointment, delegates the cancellation to {@link \Wl\Visit\VisitStatusApi::post()}.
 */
class ConfirmModel extends WlModelAbstract
{
  /**
   * Information about the appointment.
   *
   * `null` in case of cancellation of single appointment. Otherwise a list of the recurring
   *  appointments within the selected date range: 
   *
   * <dl>
   *   <dt>string `dtl_start`</dt>
   *   <dd>Appointment start date.</dd>
   * 
   *   <dt>string `k_appointment`</dt>
   *   <dd>Appointment key. </dd>
   * 
   *   <dt>string `text_staff`</dt>
   *   <dd>Staff name.</dd>
   * </dl>
   * @get result
   * @post get
   * @var array|null
   */
  public $a_appointment_list = null;

  /**
   * End date of period for appointments cancellation.
   *
   * `null` in case of cancellation of single appointment.
   *
   * @get get,result
   * @post get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Start date of period for appointments cancellation.
   *
   * `null` in case of cancellation of single appointment.
   *
   * @get get,result
   * @post get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Max date of period for appointments cancellation.
   *
   * `null` in case of cancellation of single appointment.
   *
   * @get result
   * @post get
   * @var string|null
   */
  public $dtl_max = null;

  /**
   * Min date of period for appointments cancellation.
   *
   * `null` in case of cancellation of single appointment.
   *
   * @get result
   * @post get
   * @var string|null
   */
  public $dtl_min = null;

  /**
   * Amount to be charged for the user.
   *
   * `null` if specified visit is not the blame, according business late cancel and no shows rules.
   *
   * @get result
   * @var string|null
   */
  public $html_fee_amount = null;

  /**
   * Count of selected appointments during recurring appointments cancellation.
   *
   * `null` in case of cancellation of single appointment.
   *
   * @get result
   * @var int|null
   */
  public $i_appointment_selected = null;

  /**
   * Type of the blame, one of {@link ChargeSid} constants.
   *
   * `0` means blame is not configured.
   *
   * @get result
   * @var int
   */
  public $id_charge = 0;

  /**
   * Cancelling status. One of {@link WlVisitSid} constants.
   * Zero when status is choosing on form (opening form from schedule list view).
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_visit = 0;

  /**
   * Is it recurring appointment cancellation for specific appointments.
   * `true` - for specific appointments; `false` - appointments going forward.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_appointment_specific = false;

  /**
   * A staff decision to charge or not charge a penalty when a customer meets late cancel/no-show requirements.
   *
   * @post get
   * @var bool
   */
  public $is_charge_fee = true;

  /**
   * Is mail notification should be sent by default.
   *
   * @get result
   * @post get
   * @var bool
   */
  public $is_inform_mail;

  /**
   * Is push notification should be sent by default.
   *
   * @get result
   * @post get
   * @var bool
   */
  public $is_inform_push;

  /**
   * Is SMS notification should be sent by default.
   *
   * @get result
   * @post get
   * @var bool
   */
  public $is_inform_sms;

  /**
   * Is it recurring appointment cancellation.
   *
   * `false` in case of cancellation of single appointment.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_recurring = false;

  /**
   * Key of the cancelling appointment.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_appointment = '';

  /**
   * Key of the business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key of cancelling appointment.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Key of the live mail pattern.
   *
   * @post get
   * @var string
   */
  public $k_mail_pattern_live = '';

  /**
   * Key of the service of appointment.
   * 'null' when cancelling asset booking.
   *
   * @get result
   * @var string|null
   */
  public $k_service;

  /**
   * Key of the visit to cancel.
   * Empty when visit key not known (opening form from schedule list view).
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_visit = '';

  /**
   * Amount to be charged for the user.
   *
   * `null` if specified visit is not the blame, according business late cancel and no shows rules.
   *
   * @get result
   * @post get
   * @var string|null
   */
  public $m_fee_amount = null;

  /**
   * Notification to be sent. One of {@link RsMailSid} constants.
   *
   * @get result
   * @var string
   */
  public $sid_mail;

  /**
   * Name of client which appointment is cancelling.
   *
   * @get result
   * @var string
   */
  public $text_client_name;

  /**
   * Cancelling reason.
   *
   * @post get
   * @var string
   */
  public $text_reason = '';

  /**
   * Cancelling status name.
   *
   * @get result
   * @var string
   */
  public $text_status;

  /**
   * Appointment title.
   *
   * `null` in case of cancellation of single appointment.
   *
   * @get result
   * @var string|null
   */
  public $text_title = null;
}

?>