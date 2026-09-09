<?php

namespace WellnessLiving\Core\Saml;

/**
 * A list of key purposes.
 *
 * Values of this SID is used for <tt>use</tt> attribute of <tt>&lt;KeyDescriptor&gt;</tt> tag.
 *
 * See SAML Meta 2.4.1.1 specification for details.
 */
class SamlMetaKeyUseSid
{
  /**
   * If the use attribute is omitted, then the contained key information is applicable to both
   * {@link SamlMetaKeyUseSid::ENCRYPTION} and
   * {@link SamlMetaKeyUseSid::SIGNING}.
   */
  const BOTH = 3;

  /**
   * A use value of "encryption" means that the contained key information is suitable for use in wrapping encryption
   * keys for use by the entity when acting in the enclosing role.
   *
   * The private decryption key is held securely by the counterpart.
   */
  const ENCRYPTION = 1;

  /**
   * A use value of "signing" means that the contained key information is applicable to both signing and TLS/SSL
   * operations performed by the entity when acting in the enclosing role.
   *
   * Note that key of this type is ambiguous. A signing certificate is indistinguishable from a back-channel TLS
   * certificate in metadata (and vice versa).
   *
   * The term "signing certificate" is a misnomer. A signing certificate in metadata is actually used for signature
   * verification, not signing. The private signing key is held securely by the signing party.
   */
  const SIGNING = 2;
}

?>