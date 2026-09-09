<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Onboarding;

/**
 * Which information the platform needs to collect from the user.
 *
 * @link https://stripe.com/docs/api/account_links/create#create_account_link-collect
 */
class StripeAccountLinkCollectSid
{
  /**
   * Only collect information that is currently due.
   */
  const CURRENTLY_DUE = 1;

  /**
   * Collect information that is eventually due.
   */
  const EVENTUALLY_DUE = 2;
}

?>