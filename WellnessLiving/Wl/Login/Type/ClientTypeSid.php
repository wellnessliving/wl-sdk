<?php

namespace WellnessLiving\Wl\Login\Type;

/**
 * A list of client type IDs.
 *
 * Last used ID: 3.
 */
class ClientTypeSid
{
  /**
   * Record contains type of member.
   */
  const MEMBER = 3;

  /**
   * Record is {@link SystemSid::PROSPECT}.
   *
   * See {@link SystemSid} for details.
   */
  const NOTHING = 1;

  /**
   * Record contains type of client.
   */
  const PASSHOLDER = 2;
}

?>