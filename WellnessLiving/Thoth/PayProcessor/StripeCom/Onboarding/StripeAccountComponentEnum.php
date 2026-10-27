<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Onboarding;

/**
 * Embedded Stripe components that an Account Session can enable for a connected account.
 *
 * A session enables only the
 * components that the page asks for. {@link CreateSessionApi} checks that every ID is one of this enumeration and
 * that the user may open the page, but it does not check which components the page needs.
 *
 * Last used ID: 3
 */
class StripeAccountComponentEnum
{
  /**
   * Account Management: the merchant views and edits the business details, the public details and the payout
   * bank account.
   *
   * @link https://docs.stripe.com/connect/supported-embedded-components/account-management
   */
  const ACCOUNT_MANAGEMENT = 2;

  /**
   * Account Onboarding: the merchant fills in the information that Stripe needs to activate the account.
   *
   * @link https://docs.stripe.com/connect/supported-embedded-components/account-onboarding
   */
  const ACCOUNT_ONBOARDING = 1;

  /**
   * Notification Banner: tells the merchant what Stripe needs from the account after the onboarding (a document,
   * a risk review). Renders nothing if there is nothing to do.
   *
   * @link https://docs.stripe.com/connect/supported-embedded-components/notification-banner
   */
  const NOTIFICATION_BANNER = 3;
}

?>