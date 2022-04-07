<?php 

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;

/**
 * API to get list of active businesses
 */
class BusinessAccountModel extends WlModelAbstract
{
  /**
   * List of business Ids (k_business)
   *
   * @get result
   * @var int[]
   */
  public $a_business_ids = [];
}

?>