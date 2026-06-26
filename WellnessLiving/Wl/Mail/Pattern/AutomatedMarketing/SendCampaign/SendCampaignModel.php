<?php

namespace WellnessLiving\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage marketing campaigns.
 *
 * @method WlModelRequest get() Gets campaign data.
 * @method WlModelRequest post() Saves 'Send campaign'.
 */
class SendCampaignModel extends WlModelAbstract
{
  /**
   * Whether to run access check only.
   * If `true` - only verify access permissions. By default - `false`.
   *
   * @get get
   * @var bool
   */
  public $is_check_access = false;

  /**
   * A campaign data to load.
   *
   * @get result
   * @var string
   */
  public $json_campaign_load = '';

  /**
   * A campaign data to save.
   *
   * @post post
   * @var string
   */
  public $json_campaign_save = '';

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Mail pattern live key.
   *
   * @get get
   * @post result
   * @var string
   */
  public $k_mail_pattern_live = '0';
}

?>