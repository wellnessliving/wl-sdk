<?php

namespace WellnessLiving\Wl\Business\Franchise;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to get a franchise group.
 * Group is all businesses bound by a franchise (both franchisor and franchisees).
 *
 * @method WlModelRequest get() Gets franchise group for a given business.
 */
class FranchiseGroupModel extends WlModelAbstract
{
  /**
   * Keys of businesses of franchise group.
   *
   * @get result
   * @var string[]
   */
  public $a_business;

  /**
   * Key of business to get data for. It may be both franchisor and franchisee.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>