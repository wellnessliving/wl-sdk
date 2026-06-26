<?php

namespace WellnessLiving\Wl\Business\Sms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for send messages from the virtual phone number of the business.
 *
 * @method WlModelRequest post()
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
   * @post post
   * @var string
   */
  public $s_key = '';

  /**
   * The body of the sms.
   *
   * @post post
   * @var string
   */
  public $text_sms_body = '';

  /**
   * User key for which need to send the sms.
   *
   * @post post
   * @var string
   */
  public $uid;
}

?>