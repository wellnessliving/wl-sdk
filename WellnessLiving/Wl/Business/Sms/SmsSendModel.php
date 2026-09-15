<?php

namespace WellnessLiving\Wl\Business\Sms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for send messages from the virtual phone number of the business.
 *
 * @method WlModelRequest post() Sends an SMS message from the business virtual phone number to a client.  Applies smart-encoding replacements to the message body, shortens links so the client  receives a short link instead of the raw URL, and queues the actual sending through an  asynchronous task. Returns the shortened message body so the staff interface can show  exactly what the client will receive.
 */
class SmsSendModel extends WlModelAbstract
{
  /**
 * Local date with time when sms sent successfully (or failed) in MySQL format.
 *
 * If business is not specified, will not be returned.
 *
 * @post result,error
 * @var string
 */
  public $dtl_send;

  /**
 * Key of the business.
 *
 * @post post
 * @var string
 */
  public $k_business;

  /**
 * The unique key of the sent SMS.
 *
 * @decorator trim
 * @post post
 * @rule length-max KEY_LENGTH
 * @rule length-min KEY_LENGTH
 * @var string
 */
  public $s_key = '';

  /**
 * The body of the sms.
 *
 * @decorator trim
 * @post post
 * @rule length-max SMS_LENGTH_MAX
 * @rule length-min 1
 * @var string
 */
  public $text_sms_body = '';

  /**
 * The body of the SMS that is actually sent to the client - the same text as
 * {@link SmsSendModel::$text_sms_body}, but with every link replaced by a short link.
 *
 * The client side uses this value to refresh the message that is already shown in the chat, so the staff member
 * sees exactly the same text that the client receives.
 *
 * Equals to the text that was posted if it contains no links, or if none of the links could be shortened.
 *
 * @post result
 * @var string
 */
  public $text_sms_body_short = '';

  /**
 * User key for which need to send the sms.
 *
 * @post post
 * @var string
 */
  public $uid;
}

?>