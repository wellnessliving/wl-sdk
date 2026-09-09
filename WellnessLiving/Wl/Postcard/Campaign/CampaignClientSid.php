<?php

namespace WellnessLiving\Wl\Postcard\Campaign;

/**
 * Ways to select client for mail campaign.
 *
 * Last used ID: 3.
 */
class CampaignClientSid
{
  /**
   * Send to all clients of a business.
   */
  const ENTIRE = 1;

  /**
   * Send to clients of certain groups.
   */
  const GROUP = 2;

  /**
   * Sent to clients of certain types.
   */
  const TYPE = 3;
}

?>