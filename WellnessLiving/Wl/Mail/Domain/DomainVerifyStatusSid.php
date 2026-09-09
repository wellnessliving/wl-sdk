<?php

namespace WellnessLiving\Wl\Mail\Domain;

/**
 * Statuses of domain verification.
 * Based on the statuses that return Amazon SES API.
 *
 * Last used ID: 3.
 */
class DomainVerifyStatusSid
{
  /**
   * Domain is not verified.
   */
  const FAIL = 2;

  /**
   * Domain verification is pending.
   * This is the initial state of the domain verification.
   * After state should be changed to {@link DomainVerifyStatusSid::FAIL} or {@link DomainVerifyStatusSid::SUCCESS}.
   */
  const PENDING = 1;

  /**
   * Domain is verified.
   */
  const SUCCESS = 3;
}

?>