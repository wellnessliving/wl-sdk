<?php

namespace WellnessLiving\Core\Request\Token;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates a one-time PIN code.
 *
 * This code must be used for generating a security token.
 *
 * @method WlModelRequest get() Gets new pin code.  First step of push-notification-based security token generation. Issues a short-lived PIN code linked to a push recipient, which is then sent to the user's device. The client must present this PIN before its expiry to receive the final security token.
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