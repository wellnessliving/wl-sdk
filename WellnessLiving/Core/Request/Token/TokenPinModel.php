<?php

namespace WellnessLiving\Core\Request\Token;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint to create a one-time PIN code.
 * This code must be used for generating a security token.
 */
class TokenPinModel extends WlModelAbstract
{
  /**
   * The expiration date/time of the PIN code.
   *
   * @get result
   * @var string
   */
  public $dtu_expire;

  /**
   * The PIN code.
   *
   * @get result
   * @var string
   */
  public $text_pin;

  /**
   * The ID to use to send a security code via a push notification.
   *
   * @get get
   * @var string
   */
  public $text_push = '';
}

?>