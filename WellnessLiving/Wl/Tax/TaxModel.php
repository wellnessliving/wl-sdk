<?php

namespace WellnessLiving\Wl\Tax;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns tax information for a business.
 */
class TaxModel extends WlModelAbstract
{
  /**
   * The tax title.
   *
   * @get result
   * @var string
   */
  public $text_tax = '';

  /**
   * The tax ID to get information for.
   *
   * This will be `0` if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_tax = '0';
}

?>