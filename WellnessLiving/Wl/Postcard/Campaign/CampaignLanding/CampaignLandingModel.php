<?php

namespace WellnessLiving\Wl\Postcard\Campaign\CampaignLanding;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for subscribing for direct mail campaigns.
 *
 * @method WlModelRequest post() Enables direct mail campaign for a specified business.
 */
class CampaignLandingModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business;
}

?>