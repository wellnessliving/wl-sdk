<?php

namespace WellnessLiving\Wl\Business\Sms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for check to possible send SMS to a client or not.
 *
 * @method WlModelRequest post()
 */
class SmsSendCheckModel extends WlModelAbstract
{
  /**
   * Key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * User key for which need to send the SMS.
   *
   * @post post
   * @var string
   */
  public $uid;
}

?>