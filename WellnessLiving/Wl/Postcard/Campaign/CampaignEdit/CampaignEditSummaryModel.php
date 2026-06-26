<?php

namespace WellnessLiving\Wl\Postcard\Campaign\CampaignEdit;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get summary data about direst mail campaign.
 *
 * @method WlModelRequest get() Calculates summary information about mail campaign.
 */
class CampaignEditSummaryModel extends WlModelAbstract
{
  /**
   * Quantity of recipients.
   *
   * @get result
   * @var int
   */
  public $i_quantity;

  /**
   * Whether to send mails to active and inactive clients.
   * One of {@link AFlagSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_flag_active = 0;

  /**
   * Recipient group.
   *
   * @get get
   * @var int
   */
  public $id_postcard_campaign_client;

  /**
   * Business in which clients must be searched.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Total cost of campaign.
   *
   * @get result
   * @var string
   */
  public $m_cost;

  /**
   * Serialized by JSON list of client types.
   *
   * @get get
   * @var string
   */
  public $s_login_type = '';

  /**
   * Serialized by JSON list of client groups.
   *
   * @get get
   * @var string
   */
  public $s_member_group = '';
}

?>