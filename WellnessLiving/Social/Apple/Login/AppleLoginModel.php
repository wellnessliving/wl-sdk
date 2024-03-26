<?php

namespace WellnessLiving\Social\Apple\Login;

use WellnessLiving\WlModelAbstract;

/**
 * Authorizes a user with Apple.
 */
class AppleLoginModel extends WlModelAbstract
{
  /**
   * The application ID.
   *
   * @post post
   * @var string
   */
  public $text_application = '';

  /**
   * The authorization code.
   *
   * @post post
   * @var string
   */
  public $text_authorization = '';
}

?>