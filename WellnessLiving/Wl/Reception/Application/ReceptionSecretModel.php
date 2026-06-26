<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to generate secret key, which gives access to the Reception (Self Check-In) API endpoints.
 *
 * The usual flow is the following. Staff with access signs in and turns on Self Check-In application.
 * This application is run on the public available device without full control from the staff. This is why staff should
 * be signed out. To store access, we generate secret key, which is stored in the persistent session and all further
 * requests should be done with this secret key.
 *
 * @method WlModelRequest get()
 */
class ReceptionSecretModel extends WlModelAbstract
{
  /**
   * Key of the business, where Check In application is started.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the location, where Check In application is started.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Generate secret key, which allows you to use reception api endpoints in the given location within the same persistent session.
   *
   * @get result
   * @var string
   */
  public $s_secret = '';
}

?>