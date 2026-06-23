<?php

namespace WellnessLiving\Wl\Lead\Source;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Retrieves Lead Source element.
 */
class LeadSourceElementModel extends WlModelAbstract
{
  /**
   * List of Lead Sources.
   *
   * <dl>
   *   <dt>int `i_sort`</dt>
   *   <dd>Sorting order.</dd>
   * 
   *   <dt>int|null `id_lead_source`</dt>
   *   <dd>
   *     System-defined Lead Source ID. One of {@link ModeSid} constants.
   * `null` if it is a custom Lead Source.
   *   </dd>
   * 
   *   <dt>string `k_lead_source`</dt>
   *   <dd>Key of the lead source. </dd>
   * 
   *   <dt>string `k_skin`</dt>
   *   <dd>
   *     Key of the lead skin. 
   * Will be set only in case if <var>id_lead_source</var> is {@link ModeSid::WIDGET} and
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
   * @delete post
   * @post post
   * @put post
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the lead source.
   *
   * @delete post
   * @put result
   * @var string
   */
  public $k_lead_source = '';

  /**
   * Key of the lead source.
   *
   * @delete get
   * @var string
   */
  public $k_lead_source_replace = '';

  /**
   * Name of new lead source item.
   *
   * @put post
   * @var string
   */
  public $text_lead_source = '';
}

?>