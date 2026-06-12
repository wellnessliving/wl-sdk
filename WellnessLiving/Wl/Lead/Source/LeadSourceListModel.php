<?php

namespace WellnessLiving\Wl\Lead\Source;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of Lead Sources.
 */
class LeadSourceListModel extends WlModelAbstract
{
  /**
   * List of Lead Sources.
   *
   * @get result
   * @var array[]
   */
  public $a_lead_source = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>