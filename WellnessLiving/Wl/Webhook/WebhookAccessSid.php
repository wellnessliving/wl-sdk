<?php

namespace WellnessLiving\Wl\Webhook;

/**
 * Access IDs to specify webhook URL limited by business.
 *
 * Last used: 3.
 */
class WebhookAccessSid
{
  /**
   * Business access is not restricted for the webhook.
   */
  const ALL = 1;

  /**
   * All changes to system tables, as well as business tables for the business specified in
   */
  const FRANCHISOR = 2;

  /**
   * All changes to system tables, as well as business tables for the business specified in
   */
  const SINGLE = 3;
}

?>