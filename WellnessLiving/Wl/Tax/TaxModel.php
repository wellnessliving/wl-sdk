<?php

namespace WellnessLiving\Wl\Tax;

use WellnessLiving\WlModelAbstract;

/**
 * Tax information.
 */
class TaxModel extends WlModelAbstract
{
  /**
   * Tax title.
   *
   * @get result
   * @var string
   */
  public $text_tax = '';

  /**
   * Tax ID to get information for.
   *
   * <tt>'0'</tt> if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_tax = '0';
}

?>