<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Onboarding;

/**
 * Which Stripe Accounts API an account of a merchant was created through.
 *
 * Describes how the account was created, so
 * it must be updated if an account is ever moved from one API to another.
 *
 * Last used ID: 2
 */
class StripeAccountApiEnum
{
  /**
   * The account was created through Accounts v1 (Express). It has a Stripe dashboard and the hosted onboarding.
   *
   * This is also the value of every account that existed before the value was stored.
   */
  const ACCOUNTS_V1 = 1;

  /**
   * The account was created through Accounts v2. It has no Stripe dashboard and uses embedded components.
   */
  const ACCOUNTS_V2 = 2;
}

?>