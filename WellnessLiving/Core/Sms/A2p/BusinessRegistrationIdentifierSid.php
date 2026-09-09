<?php

namespace WellnessLiving\Core\Sms\A2p;

/**
 * Business registration identifiers for A2P10DLC registration.
 *
 * Last used id: 3.
 */
class BusinessRegistrationIdentifierSid
{
  /**
   * DUNS Number (Dun & Bradstreet).
   *
   * @title DUNS Number (Dun & Bradstreet)
   * @twilio-value DUNS
   */
  const DUNS = 1;

  /**
   * Employer Identification Number (EIN).
   *
   * @title Employer Identification Number (EIN)
   * @twilio-value EIN
   */
  const EIN = 2;

  /**
   * Other.
   *
   * @title Other
   * @twilio-value Other
   */
  const OTHER = 3;
}

?>