<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets a list of active businesses.
 *
 * To run this endpoint, a user must be authorized with the `rs.business.view` privilege.
 *
 * @method WlModelRequest get() Generates list of active business keys for the same region as the requesting user (proper permissions required).  Used internally by WellnessLiving operations tools to enumerate all customer businesses in the current region. Returns only active, non-test businesses; set `is_prospects` to also include prospect businesses that have not yet churned. Requires the `rs.business.view` privilege.
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
   * `true` returns WellnessLiving customers.
   *
   * `false` returns prospects.
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