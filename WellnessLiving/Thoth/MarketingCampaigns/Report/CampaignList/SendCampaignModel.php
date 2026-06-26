<?php

namespace WellnessLiving\Thoth\MarketingCampaigns\Report\CampaignList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets data for 'Send campaign'.
 *
 * @method WlModelRequest get() Gets 'Send campaign' methods.
 */
class SendCampaignModel extends WlModelAbstract
{
  /**
   * List of the 'Send campaign' methods.
   *
   * <dl>
   *   <dt>array `a_campaign_method`</dt>
   *   <dd>
   *     Send campaign methods. Each element has the next structure:
   *     <dl>
   *       <dt>string `s_class`</dt>
   *       <dd>A method classes.</dd>
   * 
   *       <dt>string `s_onclick`</dt>
   *       <dd>Click method.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>Title of a method.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>URL link.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_campaign_list = [];

  /**
   * @get get
   * @var int
   */
  public $id_mail_page = 0;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>