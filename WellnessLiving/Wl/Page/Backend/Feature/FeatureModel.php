<?php

namespace WellnessLiving\Wl\Page\Backend\Feature;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks all features for enabled or disabled.
 *
 * @method WlModelRequest get() Get all features with statuses enabled or disabled.  Validates the business key, then checks every known feature and reports whether it is enabled for the business.
 */
class FeatureModel extends WlModelAbstract
{
  /**
   * List of all features with statuses true/false. Key of id {@link FeatureSid}
   *
   * @get result
   * @var array
   */
  public $a_features = [];

  /**
   * Key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>