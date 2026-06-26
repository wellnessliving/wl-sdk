<?php

namespace WellnessLiving\Wl\Report\Mail;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to retrieve quantity of available sms in this billing period.
 *
 * @method WlModelRequest get() Calculates available amount of messages.
 */
class SmsSummaryModel extends WlModelAbstract
{
  /**
   * Available amount of messages.
   *
   * @get result
   * @var int
   */
  public $i_available = 0;

  /**
   * The monthly messages the business has sent to date.
   *
   * @get result
   * @var int
   */
  public $i_quantity = 0;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>