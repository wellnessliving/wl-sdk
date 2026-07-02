<?php

namespace WellnessLiving\Wl;

/**
 * A list of instalment plan statuses.
 */
class WlPayInstallmentStatusSid
{
  /**
   * Installment plan is active. User should be withdrawn according to payment schedule.
   */
  const ACTIVE = 1;

  /**
   * Installment plan is cancelled.
   */
  const CANCEL = 2;

  /**
   * Installment plan sent to collections and should be paid like debt.
   */
  const COLLECTED = 4;

  /**
   * Installment plan completed after sent to collections.
   */
  const COLLECTED_COMPLETE = 5;

  /**
   * Installment plan is successfully completed.
   */
  const COMPLETE = 3;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Installment.InstallmentStatusSid';
}

?>