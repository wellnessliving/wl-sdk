<?php

namespace WellnessLiving\Social\Facebook\Login;

use WellnessLiving\WlModelAbstract;

/**
 * A class is for authorizing user with facebook.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * Application ID.
   *
   * <tt>null</tt> for use application, which makes request. And use credential of application from {@link \Wellnessliving\Core\Request\Model\Application\Credential\FacebookCredential} class for authorization user.
   *
   * @post post
   * @var string|null
   */
  public $s_application;

  /**
   * Facebook token.
   *
   * @post post
   * @var string
   */
  public $s_token;
}

?>