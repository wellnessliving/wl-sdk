<?php

namespace WellnessLiving\Wl\Integration\Curves;

/**
 * The list of possible field formats that are provided by Curves partners.
 */
class AccountHolderTypeSid
{
  /**
   * Member of the franchisee.
   */
  const CLUB_MEMBER = 1;

  /**
   * Corporate staff member
   */
  const CORPORATE = 3;

  /**
   * Staff member of the franchisee.
   */
  const FRANCHISE = 2;

  /**
   * POS Account Holder.
   */
  const POS_ACCOUNT_HOLDER = 4;
}

?>