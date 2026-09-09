<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Onboarding;

/**
 * The type of account link the user is requesting.
 *
 * @link https://stripe.com/docs/api/account_links/create#create_account_link-type
 */
class StripeAccountLinkTypeSid
{
  /**
   * Provides a form for inputting outstanding requirements.
   *
   * Send the user to the form in this mode to just collect the new information you need.
   */
  const ACCOUNT_ONBOARDING = 1;

  /**
   * Displays the fields that are already populated on the account object, and allows your user to edit previously
   * provided information.
   *
   * Consider framing this as "edit my profile" or "update my verification information".
   *
   * This type of links is applicable to custom accounts only.
   */
  const ACCOUNT_UPDATE = 2;
}

?>