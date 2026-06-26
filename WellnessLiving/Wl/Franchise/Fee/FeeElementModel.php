<?php

namespace WellnessLiving\Wl\Franchise\Fee;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete franchise fee.
 *
 * @method WlModelRequest delete() Deletes franchise fee.  {@inheritdoc}
 * @method WlModelRequest get() Returns information about the franchise fee.
 * @method WlModelRequest post() Creates/updates franchise fee.
 */
class FeeElementModel extends WlModelAbstract
{
  /**
   * @get result
   * @post post
   * @var int[]|null
   */
  public $a_apply = null;

  /**
   * List of locations where fee is applied.
   *
   * Key is location key.
   * Value is override of the fee rate(percent/flat).
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_location = [];

  /**
   * End date of the fee.
   * This is a date of last active day when fee can be applied.
   * `null` in a case fee should be active infinitely.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Start date of the fee.
   * This is a date since which fees applied to franchisee purchases.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Fee rate.
   * Percent or flat rate.
   *
   * `null` if not initialized.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $f_fee = null;

  /**
   * Specific day of the month when fee is applied.
   *
   * Specified when {@link FeeEntity::$id_frequency} is {@link ADurationSid::MONTH}.
   *
   * In others cases `null`.
   *
   * @get result
   * @post post
   * @var int|null
   */
  public $i_day = null;

  /**
   * Week day ID.
   * Specified when {@link FeeEntity::$id_frequency} is:
   * * {@link ADurationSid::WEEK}.
   * * {@link ADurationSid::WEEK2}.
   *
   * In others cases `null`.
   *
   * @get result
   * @post post
   * @var int|null
   * @see ADateWeekSid
   */
  public $id_date_week = null;

  /**
   * Schedule type ID.
   *
   * `null` if not initialized.
   *
   * @get result
   * @post post
   * @var int|null
   */
  public $id_fee_schedule = null;

  /**
   * Fee type ID.
   *
   * @get result
   * @post post
   * @var int|null
   */
  public $id_fee_type = null;

  /**
   * Frequency ID.
   *
   * In others cases `null`.
   *
   * @get result
   * @post post
   * @var int|null
   */
  public $id_frequency = null;

  /**
   * Franchisor business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Franchise fee key.
   *
   * `null` when creating new fee.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_franchise_fee = null;

  /**
   * Minimum amount of the fee.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $m_min = null;

  /**
   * Name of the fee.
   *
   * `null` if not initialized.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $text_title = null;
}

?>