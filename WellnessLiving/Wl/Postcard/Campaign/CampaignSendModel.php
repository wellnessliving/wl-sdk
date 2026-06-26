<?php

namespace WellnessLiving\Wl\Postcard\Campaign;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for force sending of mail campaign.
 *
 * @method WlModelRequest post() Performs force sending of mail campaign.
 */
class CampaignSendModel extends WlModelAbstract
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