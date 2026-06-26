<?php

namespace WellnessLiving\Wl\Visit\VisitHistoricalCount;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages information about historical visit count.
 *
 * @method WlModelRequest post() Change value of historical visit.
 */
class VisitHistoricalCountModel extends WlModelAbstract
{
  /**
   * Count of visits.
   *
   * @post get
   * @var int
   */
  public $i_visit;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * User key.
   *
   * @post get
   * @var string
   */
  public $uid;
}

?>