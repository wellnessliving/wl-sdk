<?php

namespace WellnessLiving\Social\Facebook\Login;

use WellnessLiving\WlModelAbstract;

/**
 * Tool to sing in/up with Facebook.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * Application ID.
   *
   * @post post
   * @var string
   */
  public $s_application = '';

  /**
   * Facebook authorization token.
   *
   * @post post
   * @var string
   */
  public $s_token = '';
}

?>