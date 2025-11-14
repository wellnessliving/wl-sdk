<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Checks if service can be booked by client. Throws exception if booking is restricted.
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