<?php

namespace WellnessLiving\Social\Facebook\Login;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that authorizes Facebook users.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * The application ID.
   *
   * This will be `null` if the application is being used to make the request.
   * Use the application credential from the {@link \WellnessLiving\Core\Request\Model\Application\Credential\FacebookCredential} class for user authorization.
   *
   * @post post
   * @var string|null
   */
  public $s_application;

  /**
   * The Facebook token.
   *
   * @post post
   * @var string
   */
  public $s_token;
}

?>