<?php

namespace WellnessLiving\Wl\Notification\Otp;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to verify access to the phone number via sending and checking otp code.
 *
 *  This endpoint is available only for user with a special privilege. If you want to use this endpoint, contact
 *  with WellnessLiving support first.
 *
 * @method WlModelRequest get() Sends an OTP code to the specified phone number for verification.  Checks that the rate limit for OTP generation has not been exceeded, generates a new code, and dispatches it to the given phone number via SMS. Requires a special privilege to use this endpoint.
 * @method WlModelRequest post() Verifies the OTP code submitted by the user for the specified phone number.  Checks that the submitted `$s_otp_code` matches the code previously generated for `$text_phone` and has not expired. Returns a validation error if the code is absent, incorrect, or expired.
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