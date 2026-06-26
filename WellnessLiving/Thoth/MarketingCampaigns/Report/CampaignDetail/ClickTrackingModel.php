<?php

namespace WellnessLiving\Thoth\MarketingCampaigns\Report\CampaignDetail;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint used to operate click tracking data.
 *
 * @method WlModelRequest get() Gets mail campaign tracking data. Used for 'Mail campaign detail'  report.
 */
class ClickTrackingModel extends WlModelAbstract
{
  /**
   *  Row list: 
   *
   * <dl>
   *   <dt>array `a_uid`</dt>
   *   <dd>UIDs of clients who made clicks. Used to filter by unique clicks.</dd>
   * 
   *   <dt>int `i_click_unique`</dt>
   *   <dd>Unique clicks per email link.</dd>
   * 
   *   <dt>int `i_click_total`</dt>
   *   <dd>Total clicks per email link.</dd>
   * 
   *   <dt>int `i_click_rate`</dt>
   *   <dd>Click rate.</dd>
   * 
   *   <dt>string `url_full`</dt>
   *   <dd>Clicked in an email link.</dd>
   * 
   *   <dt>string `url_click_unique`</dt>
   *   <dd>link to Marketing detail report filtered by unique clicks.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_row_list = [];

  /**
   * Send date.
   *
   * @get get
   * @var string
   */
  public $dtl_send = '';

  /**
   * Mail campaign status ID.
   *
   * @get get
   * @var int
   */
  public $id_mail_campaign_status = 0;

  /**
   * Mail history filter.
   *
   * @get get
   * @var int
   */
  public $id_mail_status = 0;

  /**
   * Whether a mail pattern live specific.
   *
   * @get get
   * @var bool
   */
  public $is_mail_pattern_live_specific = false;

  /**
   * Business key specific purchase item belongs to.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Mail pattern live key.
   *
   * @get get
   * @var string
   */
  public $k_mail_pattern_live = '';

  /**
   * Mail campaign title.
   *
   * @get get
   * @var string
   */
  public $text_mail_campaign = '';
}

?>