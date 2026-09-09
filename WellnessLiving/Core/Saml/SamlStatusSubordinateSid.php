<?php

namespace WellnessLiving\Core\Saml;

/**
 * Stores a list of second-level status codes that are referenced at various places in SAML COre specification.
 * Additional second-level status codes MAY be defined in future versions of the SAML specification.
 *
 * These values are defined in section 3.2.2.2 of SAML Core specification.
 */
class SamlStatusSubordinateSid
{
  /**
   * The responding provider was unable to successfully authenticate the principal.
   */
  const AUTHN_FAILED = 1;

  /**
   * Unexpected or invalid content was encountered within a <tt>&lt;saml:Attribute&gt;</tt> or
   * <tt>&lt;saml:AttributeValue&gt;</tt> element.
   */
  const INVALID_ATTR_NAME_OR_VALUE = 2;

  /**
   * The responding provider cannot or will not support the requested name identifier policy.
   */
  const INVALID_NAME_ID_POLICY = 3;

  /**
   * The specified authentication context requirements cannot be met by the responder.
   */
  const NO_AUTHN_CONTEXT = 4;

  /**
   * Used by an intermediary to indicate that none of the supported identity provider <tt>&lt;Loc&gt;</tt> elements in
   * an <tt>&lt;IDPList&gt;</tt> can be resolved or that none of the supported identity providers are available.
   */
  const NO_AVAILABLE_IDP = 5;

  /**
   * Indicates the responding provider cannot authenticate the principal passively, as has been requested.
   */
  const NO_PASSIVE = 6;

  /**
   * Used by an intermediary to indicate that none of the identity providers in an <tt>&lt;IDPList&gt;</tt> are
   * supported by the intermediary.
   */
  const NO_SUPPORTED_IDP = 7;

  /**
   * Used by a session authority to indicate to a session participant that it was not able to propagate logout to all
   * other session participants.
   */
  const PARTIAL_LOGOUT = 8;

  /**
   * Indicates that a responding provider cannot authenticate the principal directly and is not permitted to proxy the
   * request further.
   */
  const PROXY_COUNT_EXCEEDED = 9;

  /**
   * The SAML responder or SAML authority is able to process the request but has chosen not to respond. This status code
   * MAY be used when there is concern about the security context of the request message or the sequence of request
   * messages received from a particular requester.
   */
  const REQUEST_DENIED = 10;

  /**
   * The SAML responder or SAML authority does not support the request.
   */
  const REQUEST_UNSUPPORTED = 11;

  /**
   * The SAML responder cannot process any requests with the protocol version specified in the request.
   */
  const REQUEST_VERSION_DEPRECATED = 12;

  /**
   * The SAML responder cannot process the request because the protocol version specified in the request message is a
   * major upgrade from the highest protocol version supported by the responder.
   */
  const REQUEST_VERSION_TOO_HIGH = 13;

  /**
   * The SAML responder cannot process the request because the protocol version specified in the request message is too
   * low.
   */
  const REQUEST_VERSION_TOO_LOW = 14;

  /**
   * The resource value provided in the request message is invalid or unrecognized.
   */
  const RESOURCE_NOT_RECOGNIZED = 15;

  /**
   * The response message would contain more elements than the SAML responder is able to return.
   */
  const TOO_MANY_RESPONSES = 16;

  /**
   * An entity that has no knowledge of a particular attribute profile has been presented with an attribute drawn from
   * that profile.
   */
  const UNKNOWN_ATTR_PROFILE = 17;

  /**
   * The responding provider does not recognize the principal specified or implied by the request.
   */
  const UNKNOWN_PRINCIPAL = 18;

  /**
   * The SAML responder cannot properly fulfill the request using the protocol binding specified in the request.
   */
  const UNSUPPORTED_BINDING = 19;
}

?>