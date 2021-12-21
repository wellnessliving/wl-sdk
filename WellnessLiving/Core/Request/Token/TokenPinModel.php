<?php

namespace WellnessLiving\Core\Request\Token;

use WellnessLiving\WlModelAbstract;

/**
 * Point to create one-time pin code.
 */
class TokenPinModel extends WlModelAbstract
{
  /**
   * Date/time of pin code expiration.
   *
   * <tt>null</tt> until received.
   *
   * @get result
   * @var string|null
   */
  public $dtu_expire = null;

  /**
   * Pin code.
   *
   * <tt>null</tt> until received.
   *
   * @get result
   * @var string|null
   */
  public $text_pin = null;

  /**
   * ID to send a security code by push notification.
   *
   * @get get
   * @var string
   */
  public $text_push = '';
}

?>