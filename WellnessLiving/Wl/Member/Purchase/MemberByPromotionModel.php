<?php

namespace WellnessLiving\Wl\Member\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of active clients with the given Purchase Options.
 *
 * This endpoint returns only active clients using active Purchase Options from the given list.
 *
 * Does not return clients, to which currently signed-in user does not have access to.
 */
class MemberByPromotionModel extends WlModelAbstract
{
  /**
   * The list of active clients with the given Purchase Options.
   *
   * @get result
   * @var array[]
   */
  public $a_clients = [];

  /**
   * The key of the business for which to get a list of clients.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The comma-separated list of the Purchase Option keys.
   * Only active clients with at least one active Purchase Option from this list will be returned.
   *
   * For example: '324,123,11,556'
   *
   * @get get
   * @var string
   */
  public $s_promotion_keys = '';
}

?>