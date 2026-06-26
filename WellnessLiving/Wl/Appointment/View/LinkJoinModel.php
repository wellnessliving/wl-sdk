<?php

namespace WellnessLiving\Wl\Appointment\View;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Adds or updates join link for non-integrated virtual appointment.
 *
 * @method WlModelRequest post() Changes url join for virtual appointment.
 */
class LinkJoinModel extends WlModelAbstract
{
  /**
   * Key of non-integrated virtual appointment.
   *
   * @post post
   * @var string
   */
  public $k_appointment;

  /**
   * Key of business for which appointment belongs.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Join link for non-integrated virtual appointment.
   *
   * @post post
   * @var string
   */
  public $url_join;
}

?>