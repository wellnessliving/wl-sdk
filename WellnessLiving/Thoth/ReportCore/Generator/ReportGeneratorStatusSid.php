<?php

namespace WellnessLiving\Thoth\ReportCore\Generator;

/**
 * Lists statuses of reports from point of view of its generation.
 */
class ReportGeneratorStatusSid
{
  /**
   * Report is in an inconsistent state.
   *
   * There was an aborted operation which means this report is available partially.
   *
   * The following transitions are possible:
   *
   * * `ABORTED` => `DELETING` when a background task finds that this report is old and should be deleted.
   *
   * * `ABORTED` => `QUEUED` if user clicks to regenerate this report
   */
  const ABORTED = 6;

  /**
   * Current operation is being aborted now.
   *
   * The following transitions are possible:
   *
   * * `ABORTING` => `ABORTED` when current operation completes.
   *   This transition is performed in two places: before the beginning of the actual generation,
   *   and after completion of the generation.
   */
  const ABORTING = 5;

  /**
   * This report is being deleted now.
   *
   * The following transitions are possible:
   *
   * * `DELETING` => (report does not exist anymore) when deletion of this report completes.
   */
  const DELETING = 4;

  /**
   * This report is being generated now.
   *
   * This status is set when report is generated from zero point.
   * This status basically means that not all partition of the report present.
   * It also means that all partitions that exist have the newest values.
   *
   * All new reports are created in this status.
   *
   * The following transitions are possible:
   *
   * * `GENERATING` => `ABORTING` when generation of this report aborted by user.
   * * `GENERATING` => `READY` when generation of this report completes.
   *   This transition is performed when generation completes successfully.
   */
  const GENERATING = 2;

  /**
   * Generation of this report is queued.
   * It will start automatically when generation of other reports completes.
   *
   * The following transitions are possible:
   *
   * * `QUEUED` => (report does not exist anymore) If generation of this report was aborted while no data was generated.
   * * `QUEUED` => `ABORTED` If generation of this report was aborted while there is data from previous generation of
   *    this report.
   *
   *    This transition also occurs if a report stayed in the queue more than the set duration and
   *    there is some data left from the previous generation of this report.
   * * `QUEUED` => `GENERATING` when there is a free thread slot to start generation of this report immediately.
   */
  const QUEUED = 1;

  /**
   * Generation of this report is now completed.
   *
   * The following transitions are possible:
   *
   * * `READY` => `DELETING` when a background tasks identifies that this report is old and starts deleting it.
   *
   * * `READY` => `QUEUED` when user clicks to regenerate this report
   */
  const READY = 3;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Report.Generator.ReportGeneratorStatusSid';
}

?>