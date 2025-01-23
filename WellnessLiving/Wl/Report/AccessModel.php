<?php

namespace WellnessLiving\Wl\Report;

use WellnessLiving\WlModelAbstract;

/**
 * Checks access of the current user to the certain report int the given business.
 */
class AccessModel extends WlModelAbstract
{
  /**
   * Report CID.
   *
   * It's used mostly for second generation reports.
   * For first generation reports use {@link AccessModel::$id_report} instead.
   *
   * Only one of these two fields should be sent, but not both.
   *
   * @get get
   * @var int
   */
  public $cid_report = 0;

  /**
   * <tt>true</tt> - access is granted; <tt>false</tt> - access is denied.
   *
   * @get result
   * @var bool
   */
  public $has_access;

  /**
   * Report ID. One of {@link WlReportSid} constants.
   *
   * It's used mostly for first generation reports.
   * For second generation reports use {@link AccessModel::$cid_report} instead.
   *
   * Only one of these two fields should be sent, but not both.
   *
   * @get get
   * @var int
   */
  public $id_report = 0;

  /**
   * ID of business for which access must be checked.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>