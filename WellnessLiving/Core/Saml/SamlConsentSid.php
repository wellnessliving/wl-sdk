<?php

namespace WellnessLiving\Core\Saml;

/**
 * Consent Identifiers.
 *
 * The following identifiers MAY be used in the {@link \Core\Saml\SamlProtocolRequestAbstract::$id_consent} attribute
 * and <tt>StatusResponseType</tt> complex types to communicate whether a principal gave consent, and under what
 * conditions, for the message.
 *
 * A list of consents is defined by section 8.4 of SAML Core specification.
 */
class SamlConsentSid
{
  /**
   * Indicates that a principal's consent has been explicitly obtained by the issuer of the message during the action
   * that initiated the message.
   *
   * This value is defined by section 8.4.5 of SAML Core specification.
   */
  const EXPLICIT = 5;

  /**
   * Indicates that a principal's consent has been implicitly obtained by the issuer of the message during the action
   * that initiated the message, as part of a broader indication of consent. Implicit consent is typically more proximal
   * to the action in time and presentation than prior consent, such as part of a session of activities.
   *
   * This value is defined by section 8.4.4 of SAML Core specification.
   */
  const IMPLICIT = 4;

  /**
   * Indicates that the issuer of the message does not believe that they need to obtain or report consent
   *
   * This value is defined by section 8.4.7 of SAML Core specification.
   */
  const INAPPLICABLE = 7;

  /**
   * Indicates that a principal's consent has been obtained by the issuer of the message.
   *
   * This value is defined by section 8.4.2 of SAML Core specification.
   */
  const OBTAINED = 2;

  /**
   * Indicates that a principal's consent has been obtained by the issuer of the message at some point prior to the
   * action that initiated the message.
   *
   * This value is defined by section 8.4.3 of SAML Core specification.
   */
  const PRIOR = 3;

  /**
   * Indicates that the issuer of the message did not obtain consent.
   *
   * This value is defined by section 8.4.6 of SAML Core specification.
   */
  const UNAVAILABLE = 6;

  /**
   * No claim as to principal consent is being made.
   *
   * This value is defined by section 8.4.1 of SAML Core specification.
   */
  const UNSPECIFIED = 1;
}

?>