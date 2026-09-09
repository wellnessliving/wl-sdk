<?php

namespace WellnessLiving\Core\Saml;

/**
 * A list of signature algorithms.
 *
 * <b>Note</b> DSA does not support <tt>SHA512</tt> or <tt>RIPMED160</tt>.
 * See section 3.1 of RFC 5754 for additional information.
 *
 * @link http://tools.ietf.org/html/rfc5754#section-3.1
 * @link http://www.w3.org/TR/xmlsec-algorithms/#signature-method-uris
 */
class SamlSignatureAlgorithmSid
{
  /**
   * DSA-SHA1 algorithm.
   */
  const DSA_SHA1 = 5;

  /**
   * DSA-SHA256 algorithm.
   */
  const DSA_SHA256 = 6;

  /**
   * ECDSA-RIPEMD160 algorithm.
   */
  const ECDSA_RIPEMD160 = 10;

  /**
   * ECDSA-SHA1 algorithm.
   */
  const ECDSA_SHA1 = 7;

  /**
   * ECDSA-SHA256 algorithm.
   */
  const ECDSA_SHA256 = 8;

  /**
   * ECDSA-SHA512 algorithm.
   */
  const ECDSA_SHA512 = 9;

  /**
   * HMAC-RIPEMD160 algorithm.
   */
  const HMAC_RIPEMD160 = 14;

  /**
   * HMAC-SHA1 algorithm.
   */
  const HMAC_SHA1 = 11;

  /**
   * HMAC-SHA256 algorithm.
   */
  const HMAC_SHA256 = 12;

  /**
   * HMAC-SHA512 algorithm.
   */
  const HMAC_SHA512 = 13;

  /**
   * RSA-RIPEMD160 algorithm.
   */
  const RSA_RIPEMD160 = 1;

  /**
   * RSA-SHA1 algorithm.
   */
  const RSA_SHA1 = 2;

  /**
   * RSA-SHA256 algorithm.
   */
  const RSA_SHA256 = 3;

  /**
   * RSA-SHA512 algorithm.
   */
  const RSA_SHA512 = 4;
}

?>