<?php

namespace WellnessLiving\Social\Google\Plus;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that authorizes a user with Google.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * The application ID.
   *
   * This will be `null` for application use, which makes the request. Use the application credential from
   *
   * @post post
   * @var string|null
   */
  public $s_application;

  /**
   * The Google server authorization code.
   *
   * @post post
   * @var string
   */
  public $s_code;
}

?>