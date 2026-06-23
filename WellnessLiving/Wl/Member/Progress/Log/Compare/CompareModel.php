<?php

namespace WellnessLiving\Wl\Member\Progress\Log\Compare;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Member progress log compare data.
 *
 * @method WlModelRequest get() Returns list of dates where client logged his progress.  Retrieves all distinct dates on which the given user recorded progress entries for the business, excluding the most recent date (since it cannot be compared with itself). Returns an empty array when fewer than two entries exist.
 */
class CompareModel extends WlModelAbstract
{
  /**
   * List of local dates of the progress log.
   *
   * @get result
   * @var string[]
   */
  public $a_date;

  /**
   * Key of business to get information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * User key to search dates for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>