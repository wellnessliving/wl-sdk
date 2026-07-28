<?php

namespace WellnessLiving\Wl\Widget\Analytics;

/**
 * Widget analytics event types.
 *
 * Last ID: 3
 */
class WidgetAnalyticsEventSid
{
  /**
   * Checkout abandonment event.
   */
  const ABANDONED_CHECKOUT = 1;

  /**
   * Begin checkout event.
   */
  const BEGIN_CHECKOUT = 2;

  /**
   * Purchase event.
   */
  const PURCHASE = 3;
}

?>