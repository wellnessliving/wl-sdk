<?php

namespace WellnessLiving\Wl\Business\Phone;

/**
 * Contains all possible states of business phone number edit form.
 *
 * Last used ID: 4.
 */
class EditPanelStateSid
{
  /**
   * Default state.
   * If phone number is filled completely - verify button is enabled.
   * If phone number is not filled or filled partly - verify button is disabled.
   * Button to register number is disabled.
   */
  const PANEL_DEFAULT = 1;

  /**
   * Business phone number is already set, form is locked.
   * Generate and verify buttons are hidden.
   */
  const PANEL_LOCK = 4;

  /**
   * Phone number failed verification.
   * Verify button is disabled, button to register number is disabled too.
   * Some amount of similar phone numbers are suggested.
   */
  const VERIFY_FAIL = 3;

  /**
   * Phone number has been verified.
   * Verify button is blocked, button to register number is enabled.
   */
  const VERIFY_SUCCESS = 2;
}

?>