<?php

namespace WellnessLiving\Wl\Facebook\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint that performs authorization actions with Facebook.
 *
 * @method WlModelRequest post() Performs Facebook authorization within the context of the specified business.  Validates that the given business is active, sets it as the current frontend context, and then delegates to the parent Facebook login flow to authenticate the user.
 */
class FacebookLoginModel extends WlModelAbstract
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
   * The Facebook token.
   *
   * @post post
   * @var string
   */
  public $s_token = '';
}

?>