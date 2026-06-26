<?php

namespace WellnessLiving\Core\Request\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to get a session key.
 * CORS request only.
 *
 * This point must be done from user's browser.
 *
 * See {@link KeySecretModel} also.
 *
 * @method WlModelRequest get() Gets a session key.
 */
class KeySessionModel extends WlModelAbstract
{
  /**
   * Application ID.
   *
   * @get get
   * @var string
   */
  public $s_application;

  /**
   * CSRF code.
   *
   * @get get
   * @var string
   */
  public $s_csrf;

  /**
   * Session key.
   *
   * @get result
   * @var string
   */
  public $s_key;
}

?>