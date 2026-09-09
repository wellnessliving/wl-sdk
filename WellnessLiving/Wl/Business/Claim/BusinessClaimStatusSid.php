<?php

namespace WellnessLiving\Wl\Business\Claim;

/**
 * Business status for managing claim request behavior.
 *
 * Last used ID: 4
 */
class BusinessClaimStatusSid
{
  /**
   * Business HAD a contract with WL, but decided not to continue it, i.e. it is a churned business, or a business
   * with the trial expired.
   */
  const CHURN = 4;

  /**
   * Business has a contract with WL, be it a trial (with all fields updated and actual), or a subscription.
   */
  const CUSTOMER = 3;

  /**
   * Business is not a WL client and never was, i.e. it is a true prospect business.
   */
  const PROSPECT = 1;

  /**
   * Business claiming process started, the contact information was verified, the trial has started, but company
   * information wasn’t yet updated.
   */
  const UNVERIFY = 2;
}

?>