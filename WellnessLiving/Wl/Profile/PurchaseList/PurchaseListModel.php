<?php

namespace WellnessLiving\Wl\Profile\PurchaseList;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of purchases for a user.
 */
class PurchaseListModel extends WlModelAbstract
{
  /**
   * A list of purchased items. Every element contains a sub-array with the following fields:
   *
   * @get result
   * @var array[]
   */
  public $a_purchase;

  /**
   * The key of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>