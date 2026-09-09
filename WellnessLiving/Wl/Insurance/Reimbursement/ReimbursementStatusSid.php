<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement;

/**
 * Statuses for reimbursement requests.
 *
 * Last used ID: 3
 */
class ReimbursementStatusSid
{
  /**
   * Approved.
   *
   * @title Accepted
   */
  const APPROVED = 1;

  /**
   * Denied.
   *
   * @title Denied
   */
  const DENIED = 2;

  /**
   * Wait for approval or denial.
   *
   * @title Pending
   */
  const PENDING = 3;
}

?>