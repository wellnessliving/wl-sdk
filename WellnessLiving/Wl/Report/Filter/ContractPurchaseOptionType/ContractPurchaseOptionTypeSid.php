<?php

namespace WellnessLiving\Wl\Report\Filter\ContractPurchaseOptionType;

/**
 * Possible purchase option types to filter on in contract list report.
 */
class ContractPurchaseOptionTypeSid
{
  /**
   * Duration Pass.
   */
  const DURATION = 1;

  /**
   * Event enrollments.
   */
  const ENROLLMENT = 2;

  /**
   * Class pass.
   */
  const LIMIT = 3;

  /**
   * Memberships.
   */
  const MEMBERSHIP = 4;

  /**
   * Packages and Daily deals.
   */
  const PACKAGE = 5;

  /**
   * Unlimited pass. Day/week/month pass.
   */
  const PASS = 6;
}

?>