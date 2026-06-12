<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of payments for debts added within the previous day.
 */
class DebtTransactionModel extends WlModelAbstract
{
  /**
   * A list of debt payments for a given business added within the previous day.
   *
   * Each value is an array with next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_transaction = [];

  /**
   * If set, this is the end of the date window. Only debt payments added before or on this date will be shown.
   *
   * If left `null` and {@link DebtTransactionModel::$dl_start} has been specified only debt payments added after the start date will be returned.
   * If left `null` and {@link DebtTransactionModel::$dl_start} is also `null`, this will return debt payments from the previous month.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * If set, this is the start of the date window. Only debt payments added on or after this date will be shown.
   *
   * If left `null` and {@link DebtTransactionModel::$dl_end} has been specified, this will return debt payments since the beginning of time.
   * If left `null` and {@link DebtTransactionModel::$dl_end} is also `null`, this will return debt payments from the previous month.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * If `true`, debt payments from test businesses will be returned. Otherwise, this will be `false` if only
   * debt payments from real businesses will be returned.
   *
   * @get get
   * @var bool
   */
  public $is_test = false;

  /**
   * The business key for which debt payments should be returned.
   *
   * Use `null` if debt payments from all businesses should be returned.
   *
   * @get get
   * @var string|null
   */
  public $k_business = '';
}

?>