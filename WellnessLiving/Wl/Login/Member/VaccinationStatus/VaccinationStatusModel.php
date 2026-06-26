<?php

namespace WellnessLiving\Wl\Login\Member\VaccinationStatus;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Member Vaccination Status API.
 *
 * @method WlModelRequest post() Sets the vaccination status for a user.
 */
class VaccinationStatusModel extends WlModelAbstract
{
  /**
   * The new vaccination status.
   *
   * @post post
   * @var int
   */
  public $id_vaccination_status;

  /**
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * @post get
   * @var string
   */
  public $uid;
}

?>