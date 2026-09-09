<?php

namespace WellnessLiving\Wl\Business\Franchise\Travel;

/**
 * List of items that allow franchises to view travel options.
 */
class ProfileAccessSid
{
  /**
   * Give access to can send an email/sms/push to traveler.
   */
  const CONTACT_INFORMATION = 1;

  /**
   * Give access to attendance history.
   */
  const FULL_ATTENDANCE_HISTORY = 2;

  /**
   * Give access to the main franchise location on client overview.
   */
  const MAIN_FRANCHISE_LOCATION = 3;

  /**
   * Give access to the profile details in a view mode only.
   */
  const PROFILE_DETAILS = 4;

  /**
   * Give access to Passes and Memberships in travelers profile.
   */
  const PURCHASE_OPTION = 5;
}

?>