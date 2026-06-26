<?php

namespace WellnessLiving\Wl\Report\Mail;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to retrieve quantity of recipients which will get a postcard.
 *
 * @method WlModelRequest get() Calculates summary information about mail campaign.
 */
class PostcardSummaryModel extends WlModelAbstract
{
  /**
   * Quantity of recipients.
   *
   * @get result
   * @var int
   */
  public $i_quantity;

  /**
   * Business in which clients must be searched.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Current currency of the business.
   *
   * @get result
   * @var string
   */
  public $k_currency;

  /**
   * Total cost of postcards.
   *
   * @get result
   * @var string
   */
  public $m_cost;

  /**
   * ID of the element with the list of receivers.
   *
   * @get get
   * @var string
   */
  public $s_id = '';
}

?>