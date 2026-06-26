<?php

namespace WellnessLiving\Thoth\ReportCore\Generator;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns information about filters.
 *
 * @method WlModelRequest post() Returns information about filters.
 */
class FilterInfoModel extends WlModelAbstract
{
  /**
   * Additional filter field data.
   *
   * @post result
   * @var ReportFilterFieldDataAbstract[]
   */
  public $a_data;

  /**
   * A list of dynamic filter fields in this report.
   *
   * @post result
   * @var array[]|ReportFilterFieldInfo[]
   */
  public $a_dynamic;

  /**
   * A list of hidden filter fields in this report.
   *
   * @post result
   * @var string[]
   */
  public $a_hide;

  /**
   * Warning list of the report.
   *
   * @post result
   * @var string[]
   */
  public $a_message;

  /**
   * CID of the report which filter information should be retrieved.
   *
   * @post get
   * @var int
   */
  public $cid_report;

  /**
   * Filters that should be applied to the report.
   *
   * In this array, key is name of a filter field.
   *
   * Name of the property of that subclass corresponds key in this array.
   *
   * @post post
   * @var string
   */
  public $json_filter;

  /**
   * Key of the business which report should be shown.
   *
   * `0` or an empty string for system-wide reports.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Actor user.
   *
   * `0` or an empty string for guests.
   *
   * @post get
   * @var string
   */
  public $uid_actor;
}

?>