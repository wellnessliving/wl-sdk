<?php

namespace WellnessLiving\Wl\Business\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlServiceSid;

/**
 * The endpoint to get business services availability.
 *
 * @method WlModelRequest get()
 */
class ServiceModel extends WlModelAbstract
{
  /**
   * Business service availability.
   *
   * Array where keys are service IDs (see {@link WlServiceSid})
   *     and values are `true` if the service is available for the business and `false` otherwise.
   *
   * @get result
   * @var bool[]
   */
  public $a_services_enabled = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>