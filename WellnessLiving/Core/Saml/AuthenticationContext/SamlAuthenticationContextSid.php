<?php

namespace WellnessLiving\Core\Saml\AuthenticationContext;

/**
 * A list of authentication context classes.
 *
 * See SAML Authentication Contexts specification for details.
 */
class SamlAuthenticationContextSid
{
  /**
   * The Internet Protocol class is applicable when a principal is authenticated through the use of a provided IP
   * address.
   *
   * This class is discussed in section 3.4.1 of SAML Authentication Contexts specification.
   */
  const INTERNET_PROTOCOL = 1;

  /**
   * The Internet Protocol Password class is applicable when a principal is authenticated through the use of a provided
   * IP address, in addition to a username/password.
   *
   * This class is discussed in section 3.4.2 of SAML Authentication Contexts specification.
   */
  const INTERNET_PROTOCOL_PASSWORD = 2;

  /**
   * The Password class is applicable when a principal authenticates to an authentication authority through the
   * presentation of a password over an unprotected HTTP session.
   *
   * This class is discussed in section 3.4.8 of SAML Authentication Contexts specification.
   */
  const PASSWORD = 8;

  /**
   * The <tt>PreviousSession</tt> class is applicable when a principal had authenticated to an authentication authority
   * at some point in the past using any authentication context supported by that authentication authority.
   * Consequently, a subsequent authentication event that the authentication authority will assert to the relying party
   * may be significantly separated in time from the principal's current resource access request.
   *
   * The context for the previously authenticated session is explicitly not included in this context class because the
   * user has not authenticated during this session, and so the mechanism that the user employed to authenticate in a
   * previous session should not be used as part of a decision on whether to now allow access to a resource.
   *
   * This class is discussed in section 3.4.10 of SAML Authentication Contexts specification.
   */
  const PREVIOUS_SESSION = 10;

  /**
   * The <tt>Unspecified</tt> class indicates that the authentication was performed by unspecified means.
   *
   * This class is discussed in section 3.4.25 of SAML Authentication Contexts specification.
   */
  const UNSPECIFIED = 25;
}

?>