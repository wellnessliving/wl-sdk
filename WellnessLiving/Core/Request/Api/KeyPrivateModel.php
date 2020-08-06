<?php

namespace WellnessLiving\Core\Request\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Point to get a private key for request subscribing.
 * It is necessary in a case of CORS request.
 */
class KeyPrivateModel extends WlModelAbstract
{
  /**
   * CSRF code of a client side.
   *
   * @get get
   * @var string
   */
  public $s_csrf = '';

  /**
   * Private key for request subscribing.
   * <tt>null</tt> if not loaded.
   *
   * @get result
   * @var string|null
   */
  public $s_key_private = null;

  /**
   * Public client key.
   *
   * @get get
   * @var string
   */
  public $s_key_public = '';

  /**
   * Origin for client requests.
   *
   * @get get
   * @var string
   */
  public $url_domain = '';
}

?>