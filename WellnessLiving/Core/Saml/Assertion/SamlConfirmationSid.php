<?php

namespace WellnessLiving\Core\Saml\Assertion;

/**
 * A list of confirmation methods.
 *
 * Confirmation methods are listed in section 3 of SAML Profiles specification.
 */
class SamlConfirmationSid
{
  /**
   * The subject of the assertion is considered to be an acceptable attesting entity for the assertion by the asserting
   * party, subject to optional constraints on confirmation using the attributes that MAY be present in the
   * <tt>&lt;SubjectConfirmationData&gt;</tt> element, as defined by SAML Core specification.
   *
   * This confirmation method is discussed in section 3.3 of SAML Profiles specification.
   */
  const BEARER = 3;

  /**
   * One or more <tt>&lt;ds:KeyInfo&gt;</tt> elements MUST be present within the <tt>&lt;SubjectConfirmationData&gt;</tt>
   * element. An <tt>xsi:type</tt> attribute MAY be present in the <tt>&lt;SubjectConfirmationData&gt;</tt> element and,
   * if present, MUST be set to <tt>saml:KeyInfoConfirmationDataType</tt> (the namespace prefix is arbitrary but must
   * reference the SAML assertion namespace).
   *
   * This confirmation method is discussed in section 3.1 of SAML Profiles specification.
   */
  const HOLDER_OF_KEY = 1;

  /**
   * Indicates that no other information is available about the context of use of the assertion.
   * The relying party SHOULD utilize other means to determine if it should process the assertion further, subject to
   * optional constraints on confirmation using the attributes that MAY be present in the
   * <tt>&lt;SubjectConfirmationData&gt;</tt> element, as defined by SAML Core specification.
   *
   * This confirmation method is discussed in section 3.2 of SAML Profiles specification.
   */
  const SENDER_VOUCHES = 2;
}

?>