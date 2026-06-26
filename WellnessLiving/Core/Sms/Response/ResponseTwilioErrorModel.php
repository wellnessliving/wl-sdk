<?php

namespace WellnessLiving\Core\Sms\Response;

use WellnessLiving\WlModelAbstract;

/**
 * Handles the Twilio webhook for error alarms.
 *
 * <b>Attention!</b>
 * You can't rename or move this API to another namespace. It is used for a webhook in the Twilio account.
 *
 * @link https://www.twilio.com/docs/usage/troubleshooting/debugging-event-webhooks
 */
class ResponseTwilioErrorModel extends WlModelAbstract
{
  /**
   * Event payload information.
   *
   * @field Payload
   * @post post
   * @var string
   */
  public $json_payload = '[]';
}

?>