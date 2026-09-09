<?php

namespace WellnessLiving\Wl\Mail\Domain;

/**
 * Types of domain tokens.
 *
 * Last used ID: 2.
 */
class DomainTokenTypeSid
{
  /**
   * Dkim token.
   */
  const CNAME = 1;

  /**
   * Verification token.
   */
  const TXT = 2;
}

?>