<?php 

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;

/**
 * API to get list of active businesses.
 */
class BusinessAccountModel extends WlModelAbstract
{
  /**
   * List of business keys.
   *
   * @get result
   * @var string[]
   */
  public $a_business_keys = [];

  /**
   * Specifies if only businesses having published locations should be returned.
   *
   * @get get
   * @var bool
   */
  public $is_published = false;
}

?>