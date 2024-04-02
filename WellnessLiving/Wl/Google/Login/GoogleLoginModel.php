<?php

namespace WellnessLiving\Wl\Google\Login;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that performs authorization actions with Google.
 */
class GoogleLoginModel extends WlModelAbstract
{
  /**
   * Business in which authorization is performed.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

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