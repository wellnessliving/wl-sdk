<?php

namespace WellnessLiving\Wl\Report\Accumulation;

/**
 * Status of the report accumulation.
 *
 * Last ID: 4.
 */
class ReportAccumulationStatusSid
{
  /**
   * The report generation is being cancelled now.
   */
  const CANCELLED = 3;

  /**
   * Generation of the report is now completed.
   */
  const COMPLETED = 2;

  /**
   * Generating is finished with errors.
   */
  const ERROR = 4;

  /**
   * The report is being generated now.
   */
  const GENERATING = 1;

  /**
   * The report has been generated and should be saved.
   */
  const SAVING = 5;
}

?>