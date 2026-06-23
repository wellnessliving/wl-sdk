<?php

namespace WellnessLiving\Wl\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to verify user authorization by email and phone number via sending and checking otp code.
 *
 * @method WlModelRequest get() Sends an OTP code to the user's email or phone number to initiate authorization.  Checks the OTP rate limit, generates a new code for the given user, and dispatches it via email, SMS, or both depending on `$is_mail` and `$is_phone`. The user must not be already signed in and must not be an admin.
 * @method WlModelRequest post() Verifies the submitted OTP code and establishes an authorized session for the user.  Validates the OTP code for the given user, signs in the session, fires the post-login event, completes business registration if applicable, and returns the redirect URL for the business frontend.
 */
class RegisterOtpModel extends WlModelAbstract
{
  /**
   * Number of attempts left to submit the correct otp code.
   *
   * @post result
   * @var int
   */
  public $i_attempt_left = 0;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * JWT token generated after successful otp validation.
   *
   * @post result
   * @var string
   */
  public $s_jwt_token = '';

  /**
   * Otp code integer that was random generated.
   *
   * @post post
   * @var string
   */
  public $s_otp_code = '';

  /**
   * Email address OTP code will be sent to.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * Phone number OTP code will be sent to.
   *
   * @get get
   * @var string
   */
  public $text_phone = '';

  /**
   * Key of the user, which was signed in after successful otp verification.
   *
   * @post result
   * @var string
   */
  public $uid = '';

  /**
   * Redirect url after successful authorization.
   *
   * @post result
   * @var string
   */
  public $url_redirect = '';
}

?>