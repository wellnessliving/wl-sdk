<?php

namespace WellnessLiving\Thoth\ReportCore\Generator;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to save and get last configuration of a report.
 *
 * @method WlModelRequest get() Gets last configuration of the report filter.
 * @method WlModelRequest post() Saves last configuration of the report filter.
 */
class FilterModel extends WlModelAbstract
{
  /**
   * CID of a report page.
   *
   * Empty in a case of a single report.
   *
   * @get get
   * @post get
   * @var int
   */
  public $cid_page;

  /**
   * CID of a report.
   *
   * Empty in a case of a report page.
   *
   * @get get
   * @post get
   * @var int
   */
  public $cid_report;

  /**
   * Filter that is applied to the report.
   *
   * `array` temporary solution.
   *
   * @get result
   * @post post
   * @var string
   */
  public $json_filter;

  /**
   * Key of the business that report is shown.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Key of the saved report.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_report_save;

  /**
   * Actor user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_actor;
}

?>