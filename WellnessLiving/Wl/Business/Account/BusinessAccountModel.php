<?php 

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;

/**
 * An API used to get a list of active businesses.
 */
class BusinessAccountModel extends WlModelAbstract
{
  /**
   * A list of business keys.
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