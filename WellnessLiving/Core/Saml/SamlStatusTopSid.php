<?php

namespace WellnessLiving\Core\Saml;

/**
 * Defines permissible top-level status code values.
 *
 * These values are defined in section 3.2.2.2 of SAML Core specification.
 */
class SamlStatusTopSid
{
  /**
   * The request could not be performed due to an error on the part of the requester.
   */
  const REQUESTER = 1;

  /**
   * The request could not be performed due to an error on the part of the SAML responder or SAML authority.
   */
  const RESPONDER = 2;

  /**
   * The request succeeded. Additional information MAY be returned in the <tt>&lt;StatusMessage&gt;</tt> and/or
   * <tt>&lt;StatusDetail&gt;</tt> elements.
   */
  const SUCCESS = 3;

  /**
   * The SAML responder could not process the request because the version of the request message was incorrect.
   */
  const VERSION = 4;
}

?>