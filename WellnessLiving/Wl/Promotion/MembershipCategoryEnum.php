<?php

namespace WellnessLiving\Wl\Promotion;

/**
 * Category a membership belongs to, which defines how it factors into the memberships report and the dashboard
 * metrics.
 */
class MembershipCategoryEnum
{
  /**
   * Add-on services like session packs, programs, or specialty classes.
   *
   * Such a membership appears in the memberships report, but is excluded from the New Members, Lost Members and Churn
   * Rate metrics.
   */
  const ANCILLARY = 2;

  /**
   * Fees or complimentary memberships.
   *
   * Such a membership does not appear in the memberships report at all.
   */
  const EXCLUDED = 3;

  /**
   * Core memberships that give clients ongoing access, like monthly or annual memberships.
   *
   * Such a membership counts toward all metrics of the Memberships report.
   */
  const PRIMARY = 1;
}

?>