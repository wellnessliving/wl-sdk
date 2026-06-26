<?php

namespace WellnessLiving\Wl\Google\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint that performs authorization actions with Google.
 *
 * @method WlModelRequest post() Performs Google authorization within the context of the specified business.  Validates that the given business is active, sets it as the current frontend context, and then delegates to the parent Google login flow to authenticate the user.
 */
class GoogleLoginModel extends WlModelAbstract
{
  /**
   * Business in which authorization is performed.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The application id.
   *
   * When application not passed, credential loaded from the application, which makes the request,
   *
   * When application passed, the credential loaded by application id.
   *
   * @post post
   * @var string|null
   */
  public $s_application = null;

  /**
   * The Google server authorization code.
   *
   * @post post
   * @var string
   */
  public $s_code = '';
}

?>