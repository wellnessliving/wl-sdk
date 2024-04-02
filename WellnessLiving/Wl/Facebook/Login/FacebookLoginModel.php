<?php

namespace WellnessLiving\Wl\Facebook\Login;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that performs authorization actions with Facebook.
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
   * The application ID.
   *
   * This will be `null` if the application is being used to make the request.
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