<?php

namespace WellnessLiving\Wl\Tax;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns tax information for a business.
 *
 * @method WlModelRequest get() Returns the title for the specified tax.  Returns the human-readable display name for the given tax record. Throws if the tax key is invalid or if the tax has been marked as removed.
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