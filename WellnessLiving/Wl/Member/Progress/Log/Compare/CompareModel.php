<?php

namespace WellnessLiving\Wl\Member\Progress\Log\Compare;

use WellnessLiving\WlModelAbstract;

/**
 * Member progress log compare data.
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