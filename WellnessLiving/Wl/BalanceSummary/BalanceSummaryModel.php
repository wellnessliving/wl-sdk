<?php

namespace WellnessLiving\Wl\BalanceSummary;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An API that retrieves a list of pay account with balance by user.
 *
 * Business timezone is used because:
 * We use Account History report which works with business timezone, so api should use the same timezone to avoid confusion.
 *
 * @method WlModelRequest get()
 */
class BalanceSummaryModel extends WlModelAbstract
{
  /**
   * A list of account custom.
   *
   * Each element has the following structure:
   *
   * <dl>
   *   <dt>string `k_pay_method`</dt>
   *   <dd>The pay method key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The name of the account method.</dd>
   * 
   *   <dt>string `m_opening_balance`</dt>
   *   <dd>Opening account balance. Before the start of the report filter period.</dd>
   * 
   *   <dt>string `f_total`</dt>
   *   <dd>Total account balance.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * End date exclusively to retrieve account balance values.
   *
   * `null` if no need to get opening balance.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * The key of the business.
   *
   * `null` if not set.
   *
   * @get get
   * @var null|string
   */
  public $k_business = null;

  /**
   * Key of the user.
   *
   * `null` if not set.
   *
   * @get get
   * @var null|string
   */
  public $uid = null;
}

?>