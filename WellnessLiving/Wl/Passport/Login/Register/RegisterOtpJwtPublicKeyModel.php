<?php

namespace WellnessLiving\Wl\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a public key that verifies JWT from {@link RegisterOtpModel}.
 *
 * @method WlModelRequest get() Returns public key material for OTP registration JWT verification.
 */
class RegisterOtpJwtPublicKeyModel extends WlModelAbstract
{
  /**
   * Public key in JWK format.
   *
   * @get result
   * @var array[]
   */
  public $a_keys = [];

  /**
   * Public key in PEM format.
   *
   * @get result
   * @var string
   */
  public $s_public_key = '';
}

?>