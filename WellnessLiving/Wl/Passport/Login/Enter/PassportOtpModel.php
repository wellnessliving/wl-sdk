<?php

namespace WellnessLiving\Wl\Passport\Login\Enter;

use WellnessLiving\WlModelAbstract;

/**
 * Entry point to verify user authorization by email and phone number via sending and checking otp code.
 */
class PassportOtpModel extends WlModelAbstract
{
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
     *
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
     * User key.
     *
     * @get get
     * @post get
     * @var string
     *
     */
  public $uid = '';
}

?>