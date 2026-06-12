<?php

namespace WellnessLiving\Wl\Business\Design;

use WellnessLiving\WlModelAbstract;

/**
 * Provides business design information.
 */
class BusinessDesignModel extends WlModelAbstract
{
  /**
   * Design data for a business.
   *
   * Contains the following keys:
   *
   * @get result
   * @var array
   */
  public $a_data;

  /**
   * Business key to get design data.
   *
   * May be <tt>null</tt>. In this case default business design data is returned.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>