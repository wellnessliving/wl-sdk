<?php

namespace WellnessLiving\Core\Request\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a secret key for request signing.
 * This is required for a CORS request.
 *
 * A request to this point must be signed as an ordinary request from the SDK using transient and persistent cookies.
 * There must be no CORS (don't send from a browser).
 */
class KeySecretModel extends WlModelAbstract
{
  /**
   * The CSRF code from the client side.
   *
   * @get get
   * @var string
   */
  public $s_csrf;

  /**
   * The secret key for the request signing.
   *
   * @get result
   * @var string
   */
  public $s_key_secret;

  /**
   * The session key.
   *
   * @get get
   * @var string
   */
  public $s_key_session;

  /**
   * Alias of {@link \WellnessLiving\Core\Request\Api\KeySecretModel::$url_origin}.
   *
   * @deprecated Use {@link \WellnessLiving\Core\Request\Api\KeySecretModel::$url_origin} instead.
   * @get get
   * @var string
   */
  public $url_domain;

  /**
   * Origin for client requests.
   *
   * @get get
   * @var string
   */
  public $url_origin;
}

?>