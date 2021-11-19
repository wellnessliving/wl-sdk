<?php

namespace WellnessLiving\Social\Google\Plus;

use WellnessLiving\WlModelAbstract;

/**
 * A class is for authorizing user with Google.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * Application ID.
   *
   * <tt>null</tt> for use application, which makes request. And use credential of application from {@link GoogleCredential} class for authorization user.
   *
   * @post post
   * @var string|null
   */
  public $s_application;

  /**
   * Google server auth code.
   *
   * @post post
   * @var string
   */
  public $s_code;
}

?>