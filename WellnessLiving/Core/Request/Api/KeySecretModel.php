<?php

namespace WellnessLiving\Core\Request\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Point to get a secret key for request signing.
 * It is necessary in a case of CORS request.
 */
class KeySecretModel extends WlModelAbstract
{
  /**
   * CSRF code of a client side.
   *
   * @get get
   * @var string
   */
  public $s_csrf = '';

  /**
   * Secret key for request signing.
   * <tt>null</tt> if not loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_key_secret = null;

  /**
   * Session key.
   *
   * @get get
   * @var string
   */
  public $s_key_session = '';

  /**
   * Alias of {@link \WellnessLiving\Core\Request\Api\KeySecretModel::$url_origin}.
   *
   * @deprecated Use {@link \WellnessLiving\Core\Request\Api\KeySecretModel::$url_origin} instead,
   * @get get
   * @var string
   */
  public $url_domain = '';

  /**
   * Origin for client requests.
   *
   * @get get
   * @var string
   */
  public $url_origin = '';
}

?>