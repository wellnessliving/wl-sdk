<?php

namespace WellnessLiving\Wl\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Appointment data.
 *
 * @method WlModelRequest get() Loads appointment data.
 */
class ServiceModel extends WlModelAbstract
{
  /**
   * Locations where an appointment may be booked.
   *
   * @get result
   * @var string[]
   */
  public $a_location = [];

  /**
   * Service price mode.
   * * One of the {@link ServicePriceSid} constants.
   * *
   *
   * @get result
   * @var int
   */
  public $id_service_price;

  /**
   * Mode to require amount while booking a resource.
   * * One of the {@link ServiceRequireSid} constants.
   * *
   *
   * @get result
   * @var int
   */
  public $id_service_require;

  /**
   * Whether booking of the service required confirmation from staff member.
   * *
   *
   * @get result
   * @var bool
   */
  public $is_staff_confirm;

  /**
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>