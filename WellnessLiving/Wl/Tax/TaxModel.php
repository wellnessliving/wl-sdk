<?php

namespace WellnessLiving\Wl\Tax;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns tax information for a business.
 */
class TaxModel extends WlModelAbstract
{
  /**
   * The tax key to get information for.
   *
   * @get get
   * @var string
   */
  public $k_tax = '0';

  /**
   * The tax title.
   *
   * @get result
   * @var string
   */
  public $text_tax;
}

?>