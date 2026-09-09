<?php

namespace WellnessLiving\Wl\Member\Status;

/**
 * Client statuses.
 */
class MemberStatusSid
{
  /**
   * Client is inactive in this business.
   */
  const INACTIVE = 4;

  /**
   * Client is business member.
   */
  const MEMBER = 1;

  /**
   * Client has membership on hold.
   */
  const ON_HOLD = 3;

  /**
   * Client is not business member.
   */
  const PROSPECT = 2;
}

?>