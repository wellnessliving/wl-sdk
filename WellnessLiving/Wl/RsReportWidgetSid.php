<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Wl\Report\WlReportPageSid;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * Report widgets.
 */
class RsReportWidgetSid
{
  /**
   * A dynamic collection of reports.
   *
   * <var>rs_report_dashboard_widget.i_report_widget</var> contains <var>k_dynamic_collection</var> - primary key
   */
  const DYNAMIC = 4;

  /**
   * Report controllers of the new report generation.
   *
   * <var>rs_report_dashboard_widget.i_report_widget</var> contains <var>k_report_save</var>.
   */
  const GENERATOR_REPORT_SAVE = 6;

  /**
   * Report controllers of the new report generation.
   *
   * <var>rs_report_dashboard_widget.i_report_widget</var> contains <var>cid_controller</var>.
   */
  const GENERATOR_REPORT_SYSTEM = 5;

  /**
   * A predefined collection of reports.
   *
   * <var>rs_report_dashboard_widget.i_report_widget</var> contains <var>id_report_page</var> - one of {@link WlReportPageSid}
   * constants.
   */
  const PAGE = 3;

  /**
   * Saved reports.
   *
   * <var>rs_report_dashboard_widget.i_report_widget</var> contains <var>k_report_save</var>.
   */
  const SAVE = 2;

  /**
   * System individual reports.
   *
   * <var>rs_report_dashboard_widget.i_report_widget</var> contains <var>id_report</var> - one of {@link WlReportSid} constants.
   */
  const SYSTEM = 1;
}

?>