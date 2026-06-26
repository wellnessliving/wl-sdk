<?php

namespace WellnessLiving\Wl\Business\Account\Expense;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint designed to manage scheduled expenses.
 *
 * @method WlModelRequest delete() Removes scheduled expense payment.
 */
class ExpenseScheduleModel extends WlModelAbstract
{
  /**
   * CID of expense schedule to be managed.
   *
   * @delete get
   * @var string
   */
  public $cid_expense = '';

  /**
   * Key of a business within which expense should be managed.
   *
   * @delete get
   * @var string
   */
  public $k_business = '';

  /**
   * Unique key of scheduled expense to be managed.
   * See {@link ExpenseAbstract::uniqueKey()}
   *
   * @delete get
   * @var string
   */
  public $s_schedule_key = '';
}

?>