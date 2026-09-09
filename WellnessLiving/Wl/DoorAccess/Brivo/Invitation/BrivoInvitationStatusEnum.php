<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo\Invitation;

/**
 * An enum of invitation statuses.
 *
 * Last used ID: 4
 */
class BrivoInvitationStatusEnum
{
  /**
   * Invitation cancelled by the user.
   */
  const CANCELLED = 3;

  /**
   * Invitation past the expiration date but have not been redeemed.
   */
  const EXPIRED = 4;

  /**
   * Invitation is waiting to be redeemed by the user.
   */
  const PENDING = 1;

  /**
   * Invitation redeemed by the user.
   */
  const REDEEMED = 2;
}

?>