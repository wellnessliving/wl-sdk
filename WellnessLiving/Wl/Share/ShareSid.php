<?php

namespace WellnessLiving\Wl\Share;

/**
 * A list of share options.
 */
class ShareSid
{
  /**
   * Item is available for all staffs in a business.
   *
   * @title Everyone
   */
  const EVERYONE = 2;

  /**
   * Item is available for current user.
   *
   * @title Only me
   */
  const ONLY_ME = 1;

  /**
   * Item is available for selected staff roles.
   *
   * @title Selected Staff Roles
   */
  const SELECTED_STAFF_ROLE = 3;
}

?>