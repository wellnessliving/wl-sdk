<?php

namespace WellnessLiving\Wl\Business\Sms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for check to possible send SMS to a client or not.
 *
 * @method WlModelRequest post() Checks to possible to send SMS to a client.  Runs the same checks as `check()` and `checkCellPhoneOwner()`  for the business and client given in `k_business` and `uid`, throwing an exception when  SMS sending is not allowed or the client does not own the given cell phone.
 */
class SmsSendCheckModel extends WlModelAbstract
{
  /**
 * The business key.
 *
 * @post post
 * @var string
 */
  public $k_business;

  /**
 * The user key for which need to send the SMS.
 *
 * @post post
 * @var string
 */
  public $uid;
}

?>