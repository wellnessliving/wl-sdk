<?php

namespace WellnessLiving\Social\Google\Plus;

use WellnessLiving\WlModelAbstract;

/**
 * Authorizes a user with Google.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * The application ID.
   *
   * This will be `null` for application use, which makes the request. Use the application credential from
   * {@link \WellnessLiving\Core\Request\Model\Application\Credential\GoogleCredential} for user authorization.
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