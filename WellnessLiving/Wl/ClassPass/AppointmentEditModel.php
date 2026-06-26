<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used to make or cancel appointment reservation.
 *
 * ## Dispatched URL:
 * * <tt>/cp/v1/partners/{partner_id}/venues/{venue_id}/appointments</tt>
 * * <tt>/cp/v1/partners/{partner_id}/venues/{venue_id}/appointments/{appointment_id}</tt>
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch() Cancels appointment reservation.
 * @method WlModelRequest post() Makes appointment reservation.
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class AppointmentEditModel extends WlModelAbstract
{
  /**
   * List of bookable slots.
   *
   * @field bookables
   * @post post
   * @var BookableIdEntity[]
   */
  public $a_book;

  /**
   * Date and time of the reservation in venue locale.
   *
   * This is an ISO format of the local date: _[date]T[time]_
   *
   * @field start_datetime
   * @post post
   * @var string
   */
  public $dtl_date;

  /**
   * Visit status.
   *
   * @field status
   * @patch post
   * @var string
   */
  public $id_status;

  /**
   * User for which reservation should be performed.
   *
   * @field user
   * @post post
   * @var UserEntity
   */
  public $o_user;

  /**
   * Appointment reservation ID.
   *
   * @field appointment_id
   * @patch get
   * @post result
   * @var string
   */
  public $s_appointment_id;

  /**
   * Partner ID.
   *
   * @patch get
   * @post get
   * @var string
   */
  public $s_partner_id;

  /**
   * Service ID to be reserved.
   *
   * @field service_id
   * @post post
   * @var string
   */
  public $s_service_id = '';

  /**
   * Venue ID.
   *
   * @patch get
   * @post get
   * @var string
   */
  public $s_venue_id;

  /**
   * Some custom string for any additional information.
   *
   * @field customization
   * @patch post
   * @post post
   * @var string
   */
  public $text_note;
}

?>