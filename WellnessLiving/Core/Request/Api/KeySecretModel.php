<?php

namespace WellnessLiving\Core\Request\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Point to get a secret key for request signing.
 * It is necessary in a case of CORS request.
 *
 * Request to this point must be signed as ordinary requests from SDK (using transient and persistent cookies).
 * There must be no CORS (do not send from a browser).
 */
class KeySecretModel extends WlModelAbstract
{
  /**
   * CSRF code of a client side.
   *
   * @get get
   * @var string
   */
  public $s_csrf;

  /**
   * Secret key for request signing.
   *
   * @get result
   * @var string
   */
  public $s_key_secret;

  /**
   * Session key.
   *
   * @get get
   * @var string
   */
  public $s_key_session;

  /**
   * Alias of {@link \Wellnessliving\Core\Request\Api\KeySecretModel::$url_origin}.
   *
   * @deprecated Use {@link \Wellnessliving\Core\Request\Api\KeySecretModel::$url_origin} instead.
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