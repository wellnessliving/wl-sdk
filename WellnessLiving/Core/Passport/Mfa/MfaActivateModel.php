<?php

namespace WellnessLiving\Core\Passport\Mfa;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Activates an MFA device.
 *
 * @method WlModelRequest post() Activates an MFA device.
 */
class MfaActivateModel extends WlModelAbstract
{
  /**
   * Key of the MFA device to activate.
   *
   * @post get
   * @var string
   */
  public $k_mfa_device = '';

  /**
   * The first OTP code.
   *
   * @post post
   * @var string|null
   */
  public $s_otp = null;
}

?>