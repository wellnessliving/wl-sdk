<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;

/**
 * An API used to get a list of active businesses.
 *
 * Is not available without user authorization.
 * Requires authorized user to have privilege `rs.business.view`.
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
   * `true` to return only wellnesliving paid customers.
   * `false` to return prospects.
   *
   * Test and churned businesses are never returned.
   *
   * @get get
   * @var bool
   */
  public $is_prospects = false;

  /**
   * Specifies if only businesses having published locations should be returned.
   *
   * @get get
   * @var bool
   */
  public $is_published = false;
}

?>