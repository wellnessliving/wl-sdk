<?php

namespace WellnessLiving\Wl\Business\Sms\Settings;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * SMS Resend OTP Verification Message API.
 *
 * @method WlModelRequest post() Initiates resend of OTP verification message.
 */
class SmsOtpResendModel extends WlModelAbstract
{
  /**
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>