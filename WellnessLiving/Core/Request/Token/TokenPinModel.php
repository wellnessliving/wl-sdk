<?php

namespace WellnessLiving\Core\Request\Token;

use WellnessLiving\WlModelAbstract;

/**
 * Point to create one-time pin code.
 * This code must be used for a security token generation.
 */
class TokenPinModel extends WlModelAbstract
{
  /**
   * Date/time of pin code expiration.
   *
   * @get result
   * @var string
   */
  public $dtu_expire;

  /**
   * Pin code.
   *
   * @get result
   * @var string
   */
  public $text_pin;

  /**
   * ID to send a security code by push notification.
   *
   * @get get
   * @var string
   */
  public $text_push = '';
}

?>