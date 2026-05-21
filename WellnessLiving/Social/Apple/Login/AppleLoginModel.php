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
   * @delete post
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

  /**
   * User's first name.
   *
   * @post post
   * @var string
   */
  public $text_name_first = '';

  /**
   * User's last name.
   *
   * @post post
   * @var string
   */
  public $text_name_last = '';
}

?>