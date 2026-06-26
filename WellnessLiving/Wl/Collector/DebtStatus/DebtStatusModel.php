<?php

namespace WellnessLiving\Wl\Collector\DebtStatus;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint designed to retrieve debt status of particular user.
 *
 * @method WlModelRequest get()
 */
class DebtStatusModel extends WlModelAbstract
{
  /**
   * Date and time when user sent to collection agency.
   *
   * `null` if user has no debts.
   *
   * @get result
   * @var string|null
   */
  public $dtl_sent = null;

  /**
   * Date and time since user in given debt status.
   *
   * `null` if user has no debts.
   *
   * @get result
   * @var string|null
   */
  public $dtl_since = null;

  /**
   * Date and time when user sent to collection agency.
   *
   * `null` if user has no debts.
   *
   * @get result
   * @var string|null
   */
  public $dtu_sent = null;

  /**
   * Date and time since user in given debt status.
   *
   * `null` if user has no debts.
   *
   * @get result
   * @var string|null
   */
  public $dtu_since = null;

  /**
   * Number of days past due.
   *
   * @get result
   * @var int
   */
  public $i_day_due = 0;

  /**
   * The currency for which status should be retrieved.
   * One of {@link CurrencySid} constants.
   *
   * `null` if status should be retrieved for current business currency.
   *
   * @get get,result
   * @var int|null
   */
  public $id_currency = null;

  /**
   * The debt status ID of the client.
   *
   * `0` if collections are not supported or status could not be defined.
   *
   * @get result
   * @var int
   */
  public $id_status = 0;

  /**
   * The key of the business within which status of the user should be retrieved.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Active debt key.
   *
   * `null` if user has no debts.
   *
   * @get result
   * @var string|null
   */
  public $k_collector_debt = null;

  /**
   * Current debt amount.
   *
   * `null` if user has no debts.
   *
   * @get result
   * @var string|null
   */
  public $m_debt_current = null;

  /**
   * Future debt amount.
   *
   * `null` if user has no debts.
   *
   * @get result
   * @var string|null
   */
  public $m_debt_future = null;

  /**
   * Additional note to the debt.
   *
   * `null` if user has no debts.
   *
   * @get result
   * @var string|null
   */
  public $text_comment = null;

  /**
   * The key of the user for which status should be retrieved.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>