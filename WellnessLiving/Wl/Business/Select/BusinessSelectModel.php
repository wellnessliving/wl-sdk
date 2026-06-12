<?php

namespace WellnessLiving\Wl\Business\Select;

use WellnessLiving\WlModelAbstract;

/**
 * Provides the list of business that a staff member may access.
 */
class BusinessSelectModel extends WlModelAbstract
{
  /**
   * Configuration data used to determine the list of businesses returned. This array has the following keys:
   *
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * Business list with additional parameters for a business select HTML component.
   * This array contains the following keys and values.
   *
   * @get result
   * @var array
   */
  public $a_select = [];

  /**
   * Business in which a list of business is requested.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User who is requesting the list of businesses.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>