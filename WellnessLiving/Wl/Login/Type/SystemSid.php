<?php

namespace WellnessLiving\Wl\Login\Type;

/**
 * System default client/member types.
 *
 * If user purchases any membership it becomes member.
 * If user purchases any pass it becomes client.
 *
 * Last ID: 3.
 */
class SystemSid
{
  /**
   * Active client or member.
   */
  const ACTIVE = 1;

  /**
   * Inactive client or member.
   */
  const INACTIVE = 2;

  /**
   * Newcomer, who has not bought anything that can make him a regular client of the business.
   */
  const PROSPECT = 3;
}

?>