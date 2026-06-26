<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\MessageType;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint that can update state of "Message Type" filter in Message Center page.
 *
 * @method WlModelRequest post() Updates the state of "Message Type" filter in Message Center page.
 */
class MessageTypeOptionModel extends WlModelAbstract
{
  /**
   * List of selected message type.
   *
   * @post post
   * @var array
   */
  public $a_selected_message_type = [];

  /**
   * Business key within which setting is managed.
   * `null` if business key was not passed.
   *
   * @post get
   * @var string|null
   */
  public $k_business = null;
}

?>