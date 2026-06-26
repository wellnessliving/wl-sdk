<?php

namespace WellnessLiving\Wl\Postcard\Campaign;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to manipulate direct mail campaign.
 *
 * @method WlModelRequest delete() Deletes mail campaign.
 */
class CampaignModel extends WlModelAbstract
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