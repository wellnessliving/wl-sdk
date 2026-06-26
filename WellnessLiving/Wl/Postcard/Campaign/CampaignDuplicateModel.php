<?php

namespace WellnessLiving\Wl\Postcard\Campaign;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to duplicate direct mail campaign.
 *
 * @method WlModelRequest post() Duplicates mail campaign.
 */
class CampaignDuplicateModel extends WlModelAbstract
{
  /**
   * ID of mail campaign.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_postcard_campaign = '0';
}

?>