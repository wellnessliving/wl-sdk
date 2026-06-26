<?php

namespace WellnessLiving\Core\Passport\Mfa;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks the OTP code.
 *
 * @method WlModelRequest post() Checks the OTP code.
 */
class MfaEnterModel extends WlModelAbstract
{
  /**
   * Key of the MFA device to check OTP code with.
   *
   * @post get
   * @var string
   */
  public $k_mfa_device = '';

  /**
   * Value of the OTP code to check.
   *
   * @post post
   * @var string|null
   */
  public $s_otp = null;
}

?>