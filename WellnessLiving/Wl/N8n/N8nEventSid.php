<?php

namespace WellnessLiving\Wl\N8n;

/**
 * List of know events.
 */
class N8nEventSid
{
  /**
   * Subscription configuration edited event.
   * This event is triggered when the configuration of specific subscription has been edited.
   */
  const CONFIG_EDITED = 5;

  /**
   * Subscription schedule cancelled event.
   * This event is triggered when an existing subscription is cancelled.
   */
  const SUBSCRIPTION_CANCELLED = 3;

  /**
   * Subscription schedule created event.
   * This event is triggered when a new subscription is created.
   */
  const SUBSCRIPTION_CREATED = 2;

  /**
   * Subscription schedule edited event.
   * This event is triggered when an existing subscription is modified.
   */
  const SUBSCRIPTION_EDITED = 4;

  /**
   * Subscription snapshot event.
   * This event is triggered to send the current state of a subscription.
   */
  const SUBSCRIPTION_SNAPSHOT = 1;
}

?>