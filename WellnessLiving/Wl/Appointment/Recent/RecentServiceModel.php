<?php

namespace WellnessLiving\Wl\Appointment\Recent;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Service\ServiceSid;

/**
 * Returns list of client's last booked services. Only unique services are returned, i.e. if a client
 * booked the same service several times, only last of these bookings is returned in the list.
 */
class RecentServiceModel extends WlModelAbstract
{
  /**
   * List of last booked services.
   *
   * @get result
   * @var string[]
   */
  public $a_service_last = [];

  /**
   * Count of last booked services to return. Default value is 5.
   *
   * @get get
   * @var int
   */
  public $i_visit = 5;

  /**
   * Type of service to return. One of {@link ServiceSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_service = 0;

  /**
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the user.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>