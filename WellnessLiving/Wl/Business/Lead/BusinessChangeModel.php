<?php

namespace WellnessLiving\Wl\Business\Lead;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages referrals and referrers for a business lead request within partner program.
 *
 * @method WlModelRequest post() Saves changes to referrer or referral business for a business lead request within partner program.
 */
class BusinessChangeModel extends WlModelAbstract
{
  /**
   * Defines whether {@link BusinessChangeModel::$k_business} should be associated with referral or with referrer business.
   *
   * <tt>true</tt> - to associate with referral business.
   * <tt>false</tt> - to associate with referrer business.
   *
   * @post post
   * @var bool
   */
  public $is_referral = false;

  /**
   * Depending on value {@link BusinessChangeModel::$is_referral} defines referrer or referral business ID.
   * Empty value mean that business is not specified.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * ID of the business lead request within partner program.
   *
   * @post post
   * @var string
   */
  public $k_business_lead;
}

?>