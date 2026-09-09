<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Reporting;

/**
 * Stripe Report Run status.
 *
 * Last used id: 3.
 */
class StripeReportRunStatusSid
{
  /**
   * In case of errors.
   */
  const FAILED = 2;

  /**
   * When the Report Run is initially created.
   */
  const PENDING = 1;

  /**
   * When the Report Run is finished.
   */
  const SUCCEEDED = 3;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.Reporting.StripeReportRunStatusSid';
}

?>