<?php

namespace WellnessLiving\Social\Facebook\Login;

use WellnessLiving\WlModelAbstract;

/**
 * Authorizes Facebook users.
 */
class LoginModel extends WlModelAbstract
{
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