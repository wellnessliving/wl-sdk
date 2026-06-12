<?php

namespace WellnessLiving\Wl\Tax;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of taxes for a business.
 */
class TaxListModel extends WlModelAbstract
{
  /**
   * A list of taxes.
   *
   * Each element has the following structure:
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * The key of the business for which to get a list of taxes.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>