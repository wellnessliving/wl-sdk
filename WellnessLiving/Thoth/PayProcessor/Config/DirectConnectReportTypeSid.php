<?php

namespace WellnessLiving\Thoth\PayProcessor\Config;

/**
 * List of possible report types.
 */
class DirectConnectReportTypeSid
{
  /**
   * Current batch report.
   *
   * @var int
   */
  const CURRENT_BATCH = 1;

  /**
   * Detailed report.
   *
   * @var int
   */
  const DETAILS = 2;

  /**
   * Summary report.
   *
   * @var int
   */
  const SUMMARY = 3;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Config.DirectConnectReportTypeSid';
}

?>