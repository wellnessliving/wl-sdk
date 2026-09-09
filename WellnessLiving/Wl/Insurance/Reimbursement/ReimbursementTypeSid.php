<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement;

/**
 * Types of the reimbursements.
 *
 * We do not exactly know, what does this mean.
 * We get type from API and give ability to filter history with a type.
 *
 * Last used ID: 2.
 */
class ReimbursementTypeSid
{
  /**
   * Club Reimbursements.
   *
   * @title Club Reimbursements
   */
  const CLUB = 1;

  /**
   * Member Reimbursements.
   *
   * @title Member Reimbursements
   */
  const MEMBER = 2;
}

?>