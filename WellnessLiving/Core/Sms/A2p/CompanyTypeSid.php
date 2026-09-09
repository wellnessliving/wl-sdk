<?php

namespace WellnessLiving\Core\Sms\A2p;

/**
 * Company types for A2P10DLC registration.
 *
 * Last used id: 2.
 */
class CompanyTypeSid
{
  /**
   * Private Company.
   *
   * @title Private
   * @twilio-value private
   */
  const PRIVATE_COMPANY = 1;

  /**
   * Public Company.
   *
   * @title Public
   * @twilio-value public
   */
  const PUBLIC_COMPANY = 2;
}

?>