<?php

namespace WellnessLiving\Core\Saml\Assertion;

/**
 * The following identifiers MAY be used in the
 * {@link \Core\Saml\Assertion\SamlAttributeElement::$id_name_format <tt>NameFormat</tt>} attribute defined on the
 * {@link \Core\Saml\Assertion\SamlAttributeElement <tt>AttributeType</tt>} complex type to refer to the classification
 * of the attribute name for purposes of interpreting the name.
 */
class SamlAttributeNameFormatSid
{
  /**
   * The class of strings acceptable as the attribute name MUST be drawn from the set of values belonging to the
   * primitive type <tt>xs:Name</tt> as defined in section 3.3.6.
   *
   * See SAML Profiles specification for attribute profiles that make use of this identifier.
   */
  const BASIC = 3;

  /**
   * The attribute name is an email address. This identifier is used in the SAML 2.0 specification to indicate that the
   * attribute name is an email address, as defined in RFC 5322.
   *
   * See SAML Profiles specification for attribute profiles that make use of this identifier.
   */
  const MAIL = 4;

  /**
   * The interpretation of the attribute name is left to individual implementations.
   */
  const UNSPECIFIED = 1;

  /**
   * The attribute name follows the convention for URI references [RFC 2396], for example as used in XACML attribute
   * identifiers. The interpretation of the URI content or naming scheme is application-specific.
   * See SAML Profiles specification for attribute profiles that make use of this identifier.
   */
  const URI = 2;
}

?>