<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks if service can be booked by client. Throws exception if booking is restricted.
 *
 * @method WlModelRequest get() Checks whether a service can be booked by the given client at the given date, throwing an exception if booking is restricted.  Validates the client's age against the service's age restrictions and checks the booking date  against the service's booking window. Returns without data on success; throws exception with a descriptive message when booking is not allowed.
 */
class ServiceCheckModel extends WlModelAbstract
{
  /**
   * Date of booking in MySQL format.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * The service key.
   *
   * @get get
   * @var string
   */
  public $k_service = '';

  /**
   * The user key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>