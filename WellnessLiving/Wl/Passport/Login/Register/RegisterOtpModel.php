<?php

namespace WellnessLiving\Wl\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;

/**
 * Entry point to verify user authorization by email and phone number via sending and checking otp code.
 */
class RegisterOtpModel extends WlModelAbstract
{
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