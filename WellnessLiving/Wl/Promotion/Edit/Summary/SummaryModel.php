<?php

namespace WellnessLiving\Wl\Promotion\Edit\Summary;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Menages API methods for summary price on promotion edit page.
 *
 * @method WlModelRequest get() Retrieves information about summary price depends on initial price and taxes.
 */
class SummaryModel extends WlModelAbstract
{
  /**
   * Business key within which price should be calculated.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Initial price without taxes (or with depends on locale).
   *
   * @get get
   * @var string
   */
  public $m_price = '0';

  /**
   * Summary price in business currency.
   *
   * @get result
   * @var string
   */
  public $m_summary;

  /**
   * List of tax IDs divided by coma to apply to initial price.
   *
   * @get get
   * @var string
   */
  public $s_tax = '';
}

?>