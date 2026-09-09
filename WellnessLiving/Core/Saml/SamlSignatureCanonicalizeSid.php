<?php

namespace WellnessLiving\Core\Saml;

/**
 * Methods to canonicalize XML (as specified by W3C).
 */
class SamlSignatureCanonicalizeSid
{
  /**
   * Method to canonicalize XML with comments.
   */
  const COMMENTS = 2;

  /**
   * Method to canonicalize XML in exclusive mode.
   */
  const EXCLUSIVE = 3;

  /**
   * Method to canonicalize XML in exclusive mode.
   */
  const EXCLUSIVE_COMMENTS = 4;

  /**
   * Standard method to canonicalize XML.
   */
  const STANDARD = 1;
}

?>