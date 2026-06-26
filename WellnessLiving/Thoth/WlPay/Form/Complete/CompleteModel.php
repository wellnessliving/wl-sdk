<?php

namespace WellnessLiving\Thoth\WlPay\Form\Complete;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns information about purchase.
 *
 * @method WlModelRequest get() Returns information about purchase.
 */
class CompleteModel extends WlModelAbstract
{
  /**
   * Analytics function arguments.
   *
   * @get result
   * @var array
   */
  public $a_arguments;

  /**
   * ID of purchase currency.
   *
   * @get result
   * @var string
   */
  public $k_currency;

  /**
   * Purchase ID.
   *
   * @get get
   * @var string
   */
  public $k_purchase = '0';

  /**
   * Purchase cost.
   *
   * @get result
   * @var string
   */
  public $m_cost;

  /**
   * Number of receipt.
   *
   * @get result
   * @var string
   */
  public $s_purchase;
}

?>