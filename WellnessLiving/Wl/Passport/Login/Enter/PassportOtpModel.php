<?php

namespace WellnessLiving\Wl\Passport\Login\Enter;

use WellnessLiving\WlModelAbstract;

/**
 * Entry point to verify user authorization by email and phone number via sending and checking otp code.
 */
class PassportOtpModel extends WlModelAbstract
{
  /**
   * Number of attempts left to submit the correct otp code.
   *
   * @post result
   * @var int
   */
  public $i_attempt_left = 0;

  /**
   * @get get
   * @var int
   */
  public $id_delivery_strategy = 0;

  /**
   * Whether OTP code will be sending to user via email.
   * `true` if OTP code is sending through email,
   * `false` if OTP code is sending through phone number.
   *
   * @get get
   * @var bool
   */
  public $is_mail = false;

  /**
   * Whether OTP code will be sending to user via email.
   *  `true` if OTP code is sending through phone number,
   *  `false` if OTP code is sending through email.
   *
   * @get get
   * @var bool
   */
  public $is_phone = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Otp code integer that was random generated.
   *
   * @post post
   * @var string
   */
  public $s_otp_code = '';

  /**
   * Priority of delivery.
   *
   * Fixed values `sms` and `email` are supported.
   * Should be given in priority order comma-separated.
   *
   * @get get
   * @var string
   */
  public $text_delivery_priority = '';

  /**
   * Delivery channel that was selected based on the given priorities and user data.
   *
   * Fixed values `sms` and `email` are supported. Only one value is returned.
   *
   * @get result
   * @var string
   */
  public $text_delivery_selected = '';

  /**
   * Phone number masked with `*` symbols in case if we have priority sending and sms sending was selected.
   *
   * @get result
   * @var string
   */
  public $text_phone_masked = '';

  /**
   * User key.
   *
   * @get get
   * @post get
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