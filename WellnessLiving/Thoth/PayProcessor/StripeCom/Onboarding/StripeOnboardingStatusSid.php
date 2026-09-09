<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Onboarding;

/**
 * List of possible statuses of the stripe integration process.
 */
class StripeOnboardingStatusSid
{
  /**
   * Account is created, but no further notifications arrived from Stripe.
   *
   * Transitions to:
   * * {@link StripeOnboardingStatusSid::INCOMPLETE_ACTION_REQUIRED `INCOMPLETE_ACTION_REQUIRED`}
   *   if Stripe notifies us that documents are not fine.
   * * {@link StripeOnboardingStatusSid::INTEGRATED `INTEGRATED`} when Stripe says that there are no further actions
   *   required.
   *
   * Payments are not allowed in this status.
   *
   * Show `Complete Setup` button on Onboarding page.
   */
  const INCOMPLETE = 2;

  /**
   * Stripe has notified us that documents are not fine.
   * Transitions to
   * {@link StripeOnboardingStatusSid::INTEGRATED `INTEGRATED`}
   * when stripe says that there are no further actions required.
   *
   * Payments are not allowed in this status.
   *
   * Show `Verify Your ID` button on Onboarding page.
   */
  const INCOMPLETE_ACTION_REQUIRED = 3;

  /**
   * Stripe has notified us that documents are fine.
   *
   * Transitions to
   * {@link StripeOnboardingStatusSid::INTEGRATED_ACTION_REQUIRED `INTEGRATED_ACTION_REQUIRED`}
   * when stripe notifies that documents are not fine.
   *
   * Payments are allowed in this status.
   *
   * Show `View Dashboard` button on Onboarding page.
   */
  const INTEGRATED = 4;

  /**
   * The merchant is integrated but the Stripe has notified us that some updates are required.
   *
   * Transitions to
   * {@link StripeOnboardingStatusSid::INTEGRATED `INTEGRATED`}
   * when Stripe says that there are no further actions required.
   *
   * Payments are allowed.
   *
   * Show `Verify Your ID` button on Onboarding page.
   */
  const INTEGRATED_ACTION_REQUIRED = 5;

  /**
   * Account is not created. Row is not in the database table.
   * This status can not appear in the database.
   *
   * Transitions to
   * {@link StripeOnboardingStatusSid::INCOMPLETE `INCOMPLETE`}
   * when the account gets created.
   *
   * Payments are not allowed in this status.
   *
   * Show `Get Started` button on Onboarding page.
   */
  const NOT_INTEGRATED = 1;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.Onboarding.StripeOnboardingStatusSid';
}

?>