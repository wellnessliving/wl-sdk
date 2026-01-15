<?php

namespace WellnessLiving\Wl\Lead\Source;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Retrieves a list of Lead Sources.
 */
class LeadSourceListModel extends WlModelAbstract
{
  /**
   * List of Lead Sources.
   *
   * <dl>
   *   <dt>int|null <var>i_sort</var></dt>
   *   <dd>
   *     Sorting order. Only used in the Lead Source widget option. `null` is a temporary value that exists for
   *     a short time during the process of inserting of a new row.
   *   </dd>
   *
   *   <dt>int|null <var>id_lead_source</var></dt>
   *   <dd>
   *     System-defined Lead Source ID. One of the {@link ModeSid} constants.
   *     `null` if it is a custom Lead Source.
   *   </dd>
   *
   *   <dt>bool <var>is_add_lead</var></dt>
   *   <dd>
   *     `true` if this skin will be used for "Add Lead" form or `false` otherwise.
   *     Only one skin in the business can be used for "Add Lead" form.
   *   </dd>
   *
   *   <dt>bool <var>is_use</var></dt>
   *   <dd>
   *     Determines whether Lead Source is being used.
   *     `true` if Lead Source is being used. `false` - otherwise.
   *   </dd>
   *
   *   <dt>string <var>k_lead_source</var></dt>
   *   <dd>
   *     Key of the lead source.
   *   </dd>
   *
   *   <dt>string <var>k_skin</var></dt>
   *   <dd>
   *     Key of the lead skin.
   *   </dd>
   *
   *   <dt>string <var>text_title</var></dt>
   *   <dd>
   *     Name of the Lead Source.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_lead_source = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>