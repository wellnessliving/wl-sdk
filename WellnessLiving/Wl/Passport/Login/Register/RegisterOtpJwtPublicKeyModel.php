<?php

namespace WellnessLiving\Wl\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a public key that verifies JWT from {@link RegisterOtpModel}.
 *
 * @method WlModelRequest get() Gets the public key material for OTP registration JWT verification.  The public key is used to verify a JWT token.
 */
class RegisterOtpJwtPublicKeyModel extends WlModelAbstract
{
  /**
   * Public key in JWK format.
   *
   * Each array item is one JWK with the following structure:
   *
   * <dl>
   *   <dt>string `alg`</dt>
   *   <dd>Signing algorithm. Always 'RS256'.</dd>
   * 
   *   <dt>string `e`</dt>
   *   <dd>RSA public exponent in base64url format.</dd>
   * 
   *   <dt>string `kid`</dt>
   *   <dd>Key identifier for JWT header matching.</dd>
   * 
   *   <dt>string `kty`</dt>
   *   <dd>Key type. Always 'RSA'.</dd>
   * 
   *   <dt>string `n`</dt>
   *   <dd>RSA modulus in base64url format.</dd>
   * 
   *   <dt>string `use`</dt>
   *   <dd>Public key usage. Always 'sig'.</dd>
   * </dl>
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