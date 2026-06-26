<?php

namespace WellnessLiving\Wl\Report\Save;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to duplicate of the saved reports.
 *
 * @method WlModelRequest post() Duplicates the given saved report with new parameters:  - filters;  - sorting order.
 */
class ReportDuplicateModel extends WlModelAbstract
{
  /**
   * Filter raw data of the duplicated report.
   *
   * @post post
   * @var array
   */
  public $a_filter;

  /**
   * View widget settings raw data of the saved report.
   *
   * @post post
   * @var array
   */
  public $a_settings;

  /**
   * Business key within which duplicate operation is performed.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Report save key that should be duplicated.
   *
   * @post get,result
   * @var string
   */
  public $k_report_save;

  /**
   * UID user's key of the actor.
   *
   * @post get
   * @var string
   */
  public $uid_actor;
}

?>