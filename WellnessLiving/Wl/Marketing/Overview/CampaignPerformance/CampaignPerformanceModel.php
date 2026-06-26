<?php

namespace WellnessLiving\Wl\Marketing\Overview\CampaignPerformance;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for managing automation folders.
 *
 * @method WlModelRequest get() Get campaign performance data of the business.
 */
class CampaignPerformanceModel extends WlModelAbstract
{
  /**
   * Result totals.
   *
   * @get result
   * @var array
   */
  public $a_total = [];

  /**
   * End date.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Start date.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Business key.
   * `null` to use the system business of the current user.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>