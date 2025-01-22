<?php

namespace WellnessLiving\Wl\Notification\Otp;

use WellnessLiving\WlModelAbstract;

/**
 * Entry point to verify access to the phone number via sending and checking otp code.
 *
 *  This endpoint is available only for user with a special privilege. If you want to use this endpoint, contact
 *  with WellnessLiving support first.
 */
class PhoneOtpModel extends WlModelAbstract
{
  /**
   * Otp code integer that user entered on the form. Will be compared with otp code, which was sent previously.
   *
   * @post post
   * @var string
   */
  public $s_otp_code = '';

  /**
   * Phone number to be validated.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_phone = '';
}

?>