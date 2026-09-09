<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Landing;

/**
 * Label list for subscription cards on subscriptions landing page.
 */
class SubscriptionLandingCardLabelSid
{
  /**
   * Label indicating feature is included in base subscription (active but free).
   *
   * @title Included in subscription
   */
  const ACTIVE_FREE = 3;

  /**
   * Label indicating feature is active already (active and paying).
   *
   * @title Active
   */
  const ACTIVE_PAID = 5;

  /**
   * Label indicating feature is coming soon (cannot be activated yet).
   *
   * @title Coming soon
   */
  const SOON = 1;

  /**
   * Label indicating feature has a free trial (not active but supports trial periods).
   *
   * @title Free trial available
   */
  const TRIAL = 2;
}

?>