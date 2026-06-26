<?php

namespace WellnessLiving\Wl\Business\Feature;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API to create test subscriptions and payment gateway details.
 *
 * @method WlModelRequest post()
 */
class FeatureInitTestModel extends WlModelAbstract
{
  /**
   * Key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business = '';
}

?>