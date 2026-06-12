<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * Returns list of debts added within the previous month.
 */
class DebtListModel extends WlModelAbstract
{
  /**
   * A list of debts for the given business added within the previous month.
   *
   * Each value is an array with the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_debt = [];

  /**
   * Date before which debts should be returned.
   *
   * If set, this is the end of the date window. Only debts added before or on this date will be shown.
   *
   * If left `null` and {@link DebtListModel::$dl_start} has been specified, only debts added after the start date will be returned.
   * If left `null` and {@link DebtListModel::$dl_start} is also `null`, this will return debts from the previous month.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Date since which debts should be returned.
   *
   * If set, this is the start of the date window. Only debts added on or after this date will be shown.
   *
   * If left `null` and {@link DebtListModel::$dl_end} has been specified will return debts added since the beginning of time.
   * If left `null` and {@link DebtListModel::$dl_end} is also `null`, this will return debts from the previous month.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Defines whether new debts should be returned or only previously sent debts.
   *
   * If `true` then return new debts only.
   * If `false` then return previously sent debts only.
   *
   * @get get
   * @var bool
   */
  public $is_request_debt = false;

  /**
   * Defines whether debts for test or real business should be returned.
   *
   * If `true`, debts from test businesses will be returned. Otherwise, this will be `false` if only
   * debts from real businesses will be returned.
   *
   * @get get
   * @var bool
   */
  public $is_test = false;

  /**
   * The business key for which debts should be returned.
   *
   * Use `null` if debt payments from all businesses should be returned.
   *
   * @get get
   * @var string|null
   */
  public $k_business = '';
}

?>