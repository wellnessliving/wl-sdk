<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to get current business local date in MySQL format.
 *
 * @method WlModelRequest get() Gets information about a business.
 */
class DateLocalModel extends WlModelAbstract
{
  /**
   * Business local date in mysql format.
   *
   * @get result
   * @var string
   */
  public $dtl_date;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>