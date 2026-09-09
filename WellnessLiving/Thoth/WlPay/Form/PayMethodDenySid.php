<?php

namespace WellnessLiving\Thoth\WlPay\Form;

/**
 * Reasons why payment method is denied for usage.
 *
 * Last used ID: 2.
 */
class PayMethodDenySid
{
  /**
   * Form is processing currently. User can't change anything on it. Therefore payment method selection is disabled.
   */
  const FORM_PROCESSING = 2;

  /**
   * If the user who pays through the account is a debtor.
   */
  const USER_DEBTOR = 1;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Form.PayMethodDenySid';
}

?>