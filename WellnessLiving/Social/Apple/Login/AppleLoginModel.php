<?php

namespace Social\Apple\Login;

use WellnessLiving\WlModelAbstract;

/**
 * Tool to authorize user with Apple.
 */
class AppleLoginApi extends WlModelAbstract
{
  /**
   * Application ID.
   *
   * @post post
   * @var string
   */
  public $text_application = '';

  /**
   * Authorization code.
   *
   * @post post
   * @var string
   */
  public $text_authorization = '';
}

?>