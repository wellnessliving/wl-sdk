<?php

namespace WellnessLiving\Wl\Passport\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets the user ID for the current user and a password reset URL.
 *
 * @method WlModelRequest get() Returns the current user's login information and password reset URL for the specified business.  Validates the business key, applies any business-specific redemption settings, then delegates to the parent implementation to return the current user ID and password reset URL.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The current user key.
   *
   * This will be `null` if the user isn't signed in.
   *
   * @get result
   * @var string|null
   */
  public $uid;

  /**
   * A URL that a user can visit to reset their password.
   *
   * @get result
   * @var string
   */
  public $url_password_change;

  /**
   * The URL to the registration page.
   *
   * @get result
   * @var string
   */
  public $url_register;
}

?>