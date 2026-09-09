<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\Onboarding;

/**
 * List of possible statuses of the `Nuvei` integration process.
 */
class NuveiOnboardingStatusSid
{
  /**
   * Merchant is created, but onboarding is not started due to processor errors.
   */
  const NOT_INTEGRATED_INIT_REQUEST_FAILED = 5;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.Onboarding.NuveiOnboardingStatusSid';
}

?>