<?php

namespace WellnessLiving\Wl\Lead\Source;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of Lead Sources.
 *
 * @method WlModelRequest get() Gets list of Lead Sources.  Returns all lead sources configured for the specified business, including system-defined and custom sources, with sort order, title, associated skin, and flags indicating whether each source is currently in use. This is public endpoint, which is available for non-signed-in users. But if the user is not signed in, the list will be filtered to contain only those sources that are available for the user and with limited information.
 */
class LeadSourceListModel extends WlModelAbstract
{
  /**
   * List of Lead Sources.
   *
   * <dl>
   *   <dt>int|null `i_sort`</dt>
   *   <dd>
   *     Sorting order. Only used in the Lead Source widget option. `null` is a temporary value that exists for
   * a short time during the process of inserting of a new row.
   *   </dd>
   * 
   *   <dt>int|null `id_lead_source`</dt>
   *   <dd>
   *     System-defined Lead Source ID.
   * `null` if it is a custom Lead Source.
   *   </dd>
   * 
   *   <dt>bool `is_add_lead`</dt>
   *   <dd>
   *     `true` if this skin will be used for "Add Lead" form or `false` otherwise.
   * Only one skin in the business can be used for "Add Lead" form.
   *  Not available if current user is not a staff member or admin.
   *   </dd>
   * 
   *   <dt>bool `is_use`</dt>
   *   <dd>
   *     Determines whether Lead Source is being used.
   * `true` if Lead Source is being used. `false` - otherwise.
   *  Not available if current user is not a staff member or admin.
   *   </dd>
   * 
   *   <dt>string `k_lead_source`</dt>
   *   <dd>Key of the lead source. </dd>
   * 
   *   <dt>string `k_skin`</dt>
   *   <dd>
   *     Key of the lead skin. 
   * Not available if current user is not a staff member or admin.
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the Lead Source.</dd>
   * </dl>
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