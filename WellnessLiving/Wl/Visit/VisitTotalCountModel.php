<?php

namespace WellnessLiving\Wl\Visit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns the total number of visits for a user at a business.
 *
 * Total is the sum of attended visits in {@link \RsVisitSql} and historical visits in
 *
 * @method WlModelRequest get() Returns the total visit count for the user at the business.
 */
class VisitTotalCountModel extends WlModelAbstract
{
  /**
   * Total number of visits.
   *
   * Sum of attended visits in {@link \RsVisitSql} and historical visits
   *
   * @get result
   * @var int
   */
  public $i_visit_total = 0;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>