<?php

namespace WellnessLiving\Thoth\WlPay\Form;

/**
 * Modes for buttons to add payment sources at payment form.
 */
class PayButtonModeSid
{
  /**
   * Buttons operate like accordion.
   *
   * In this mode, payment sources are grouped and always added right after the button.
   *
   * Also, in opposite to {@link PayButtonModeSid::STANDARD}, buttons are used to remove payment sources.
   */
  const ACCORDION = 1;

  /**
   * Buttons are shown in standard mode.
   *
   * All buttons are grouped at the top of payment form. Payment sources are added after all buttons.
   */
  const STANDARD = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Form.PayButtonModeSid';
}

?>