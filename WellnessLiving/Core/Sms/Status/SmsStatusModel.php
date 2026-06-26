<?php

namespace WellnessLiving\Core\Sms\Status;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Handles the Twilio webhook for changes to the status of outgoing messages.
 *
 * <b>Attention!</b>
 * You can't rename or move this API to another namespace. It is used for a webhook in the Twilio account.
 *
 * @link https://www.twilio.com/docs/sms/api/message-resource#twilios-request-to-the-statuscallback-url
 *
 * @method WlModelRequest post()
 */
class SmsStatusModel extends WlModelAbstract
{
  /**
   * Error code returned, if sending failed.
   *
   * @field ErrorCode
   * @post post
   * @var int|null
   * @link https://www.twilio.com/docs/api/errors
   */
  public $i_error_code = null;

  /**
   * Unique identifier of the message.
   *
   * @field MessageSid
   * @post post
   * @var string
   * @link https://www.twilio.com/docs/messaging/guides/webhook-request#request-parameters
   */
  public $s_id_message = '';

  /**
   * The message status.
   *
   * @field MessageStatus
   * @post post
   * @var string
   * @link https://www.twilio.com/docs/messaging/api/message-resource#message-status-values
   */
  public $s_message_status = '';

  /**
   * Error message, if sending failed.
   *
   * @field ErrorMessage
   * @post post
   * @var string|null
   */
  public $text_error = null;
}

?>