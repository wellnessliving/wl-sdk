<?php

namespace WellnessLiving\Core\Studio;

use WellnessLiving\Core\Request\Api\KeySessionModel;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets a secret key for request signing from Studio.
 * This is required for a CORS request.
 *
 * A request to this point must be signed as an ordinary request from the SDK using transient and persistent cookies.
 * There must be no CORS (don't send from a browser).
 *
 * @method WlModelRequest get() Gets a secret key for signing.
 */
class KeySecretModel extends WlModelAbstract
{
  /**
   * The CSRF code from the client side.
   *
   * @get get
   * @var string
   */
  public $s_csrf = '';

  /**
   * The secret key for the request signing.
   *
   * @get result
   * @var string
   */
  public $s_key_secret = '';

  /**
   * The session key.
   *
   * @get get
   * @var string
   * @see KeySessionModel
   */
  public $s_key_session = '';

  /**
   * Origin for client requests.
   *
   * @get get
   * @var string
   */
  public $url_origin = '';
}

?>