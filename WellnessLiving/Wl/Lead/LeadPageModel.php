<?php

namespace WellnessLiving\Wl\Lead;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves data for Leads page.
 *
 * @method WlModelRequest post() Creates or edits a custom source lead.
 */
class LeadPageModel extends WlModelAbstract
{
  /**
   * List of lead fields. 
   *
   * <dl>
   *   <dt>int `i_sort`</dt>
   *   <dd>Field position on the lead page.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>`true` if the field is active and should be displayed on the lead form, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_require`</dt>
   *   <dd>`true` if the field is required, `false` otherwise.</dd>
   * 
   *   <dt>string `k_field`</dt>
   *   <dd>Field key.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_lead_field = [];

  /**
   * List of Lead Sources.
   *
   * <dl>
   *   <dt>int `i_sort`</dt>
   *   <dd>Sorting order.</dd>
   * 
   *   <dt>int|null `id_lead_source`</dt>
   *   <dd>
   *     System-defined Lead Source ID.
   * `null` if it is a custom Lead Source.
   *   </dd>
   * 
   *   <dt>string `k_lead_source`</dt>
   *   <dd>Key of the lead source.</dd>
   * 
   *   <dt>string `k_skin`</dt>
   *   <dd>
   *     Key of the lead skin.
   * Will be set only in case if <var>id_lead_source</var> is {@link \Wl\Mode\ModeSid::WIDGET} and
   * widget can't be used for "Add Lead" form. `false` - otherwise.
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the Lead Source.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_lead_source = [];

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Settings for added leads.
   *
   * @field a_lead_setting
   * @post post
   * @var LeadSettingEntity|array|null
   */
  public $o_lead_setting = null;
}

?>