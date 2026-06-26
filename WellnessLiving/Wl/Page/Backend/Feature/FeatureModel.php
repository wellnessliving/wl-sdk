<?php

namespace WellnessLiving\Wl\Page\Backend\Feature;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks all features for enabled or disabled.
 *
 * @method WlModelRequest get() Get all features with statuses enabled or disabled.
 */
class FeatureModel extends WlModelAbstract
{
  /**
   * List of all features with statuses true/false. Key of id {@link \Wl\Page\Backend\Feature\FeatureSid}
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