<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Claim;

/**
 * Identifiers of the steps of the guest pass claim flow.
 *
 * Last used ID: 6.
 */
class ClaimStepSid
{
  /**
   * Initial step shown to the user when they open the claim page.
   */
  const INITIAL = 1;

  /**
   * One-time password verification for users with an existing account.
   */
  const OTP = 3;

  /**
   * Optional password setup for existing users after OTP verification.
   */
  const PASSWORD = 5;

  /**
   * Registration form for users without an existing account.
   */
  const REGISTER = 2;

  /**
   * Sign-in form shown when the user opts to use their password instead of OTP.
   */
  const SIGNIN = 4;

  /**
   * Confirmation step with app download links shown after the guest pass is claimed.
   */
  const SUCCESS = 6;
}

?>