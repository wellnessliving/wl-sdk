<?php

namespace WellnessLiving\Core\Saml;

/**
 * A list of digest algorithms.
 *
 * @link https://www.w3.org/TR/xmlsec-algorithms/#digest-method-uris
 */
class SamlSignatureDigestSid
{
  /**
   * RIPEMD160 algorithm.
   */
  const RIPEMD160 = 10;

  /**
   * SHA1 algorithm.
   */
  const SHA1 = 7;

  /**
   * SHA256 algorithm.
   */
  const SHA256 = 8;

  /**
   * SHA512 algorithm.
   */
  const SHA512 = 9;
}

?>