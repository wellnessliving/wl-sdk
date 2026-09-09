<?php

namespace WellnessLiving\Wl;

/**
 * A list of report favorite types.
 */
class RsReportFavoriteSid
{
  /**
   * Saved reports.
   *
   * <var>rs_report_favorite.i_id</var> contains <var>k_report_save</var>.
   */
  const SAVE = 2;

  /**
   * Saved new generation reports.
   *
   * <var>rs_report_favorite.i_id</var> contains <var>k_report_save</var>.
   */
  const SAVE_NEW_GENERATION = 4;

  /**
   * System reports.
   *
   * <var>rs_report_favorite.i_id</var> contains <var>id_report</var>.
   */
  const SYSTEM = 1;

  /**
   * System new generation reports.
   *
   * <var>rs_report_favorite.i_id</var>
   */
  const SYSTEM_NEW_GENERATION = 3;
}

?>