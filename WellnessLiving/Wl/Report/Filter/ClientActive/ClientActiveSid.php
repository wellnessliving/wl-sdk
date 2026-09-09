<?php

namespace WellnessLiving\Wl\Report\Filter\ClientActive;

/**
 * A list of clients' statuses.
 *
 * Last used ID: 4.
 */
class ClientActiveSid
{
  /**
   * Client with active Purchase Options not on hold.
   *
   * If a client has a login promotion with `i_remain`=0 or `i_remain_duration`=0,
   * then he will not be considered active.
   */
  const HOLD_NOT = 4;

  /**
   * Client with active Purchase Options on hold.
   */
  const HOLD_YES = 3;

  /**
   * Inactive elements.
   */
  const INACTIVE = 2;
}

?>