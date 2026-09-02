<?php

namespace WellnessLiving\Wl\Lead\Stage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of lead stages of a business.
 *
 * @method WlModelRequest get() Gets a list of lead stages of the business.  Returns all lead stages configured for the specified business, both system-defined and custom ones, with their order, name and icon. In a case {@link \Wl\Lead\Stage\LeadStageListApi::$is_statistic} is `true`, the number of clients of every stage is returned too.
 */
class LeadStageListModel extends WlModelAbstract
{
  /**
   * List of lead stages of the business. Ordered by `i_order`.
   *
   * <dl>
   *   <dt>int `i_order`</dt>
   *   <dd>Sequence number of the stage in the list.</dd>
   * 
   *   <dt>int `i_automation`</dt>
   *   <dd>
   *     Number of automations used this stage.
   * Only set in a case {@link LeadStageListModel::$is_statistic} is `true`.
   *   </dd>
   * 
   *   <dt>int `i_user`</dt>
   *   <dd>
   *     Number of clients who are in this stage.
   * Only set in a case {@link LeadStageListModel::$is_statistic} is `true`.
   *   </dd>
   * 
   *   <dt>int `id_lead_stage_shape`</dt>
   *   <dd>Shape of the stage icon. One of {@link LeadStageShapeSid} constants.</dd>
   * 
   *   <dt>int|null `id_lead_stage_system`</dt>
   *   <dd>
   *     System-defined lead stage. One of {@link LeadStageSystemSid} constants.
   * `null` for a custom stage created by the business.
   *   </dd>
   * 
   *   <dt>int `id_lead_stage_type`</dt>
   *   <dd>
   *     Type of the stage.
   * The type is set when the stage is created and can not be changed afterwards.
   *   </dd>
   * 
   *   <dt>string `k_lead_stage`</dt>
   *   <dd>Key of the stage. </dd>
   * 
   *   <dt>string `s_color_background`</dt>
   *   <dd>Background color of the icon. Hexadecimal color.</dd>
   * 
   *   <dt>string `s_color_foreground`</dt>
   *   <dd>Color of characters on the icon. Hexadecimal color.</dd>
   * 
   *   <dt>string `s_icon`</dt>
   *   <dd>Characters on the icon.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the stage.</dd>
   * 
   *   <dt>string `url_member_report`</dt>
   *   <dd>
   *     URL of the report of clients who are in this stage.
   *  Only set in a case {@link LeadStageListModel::$is_statistic} is `true` and the stage contains clients.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_lead_stage = [];

  /**
   * Determines whether statistics of the stages must be returned.
   *
   * `true` to return the number of clients of every stage in `i_user`,
   * `false` to not return the statistics.
   *
   * @get get
   * @var bool
   */
  public $is_statistic = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>