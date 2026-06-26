<?php

namespace WellnessLiving\Wl\Business\Location\Merchant\Share;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves information about merchant sharing between locations.
 *
 * @method WlModelRequest post() Saves information about merchant sharing between locations.
 */
class SaveModel extends WlModelAbstract
{
  /**
   * A list of source locations for merchant sharing.
   *
   * <tt>null</tt> to not to change this list.
   *
   * @post post
   * @var string[]|null
   */
  public $a_location_from = null;

  /**
   * A list of destination locations for merchant sharing.
   *
   * <tt>null</tt> to not to change this list.
   *
   * @post post
   * @var string[]|null
   */
  public $a_location_to = null;

  /**
   * Delete all sets for the specified business.
   *
   * @post post
   * @var bool
   */
  public $is_clear = false;

  /**
   * Business key. Obligatory field.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Merchant sharing group ID.
   *
   * <tt>null</tt> to create new group.
   *
   * @post post,result
   * @var string|null
   */
  public $k_merchant_share_group = null;
}

?>