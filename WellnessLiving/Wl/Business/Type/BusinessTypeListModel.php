<?php

namespace WellnessLiving\Wl\Business\Type;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of business types.
 */
class BusinessTypeListModel extends WlModelAbstract
{
  /**
   * A list of business types. Each element has the next structure: 
   *
   * @get result
   * @var array[]
   */
  public $a_business_type = [];
}

?>