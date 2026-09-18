<?php

namespace WellnessLiving\Wl\Resource\Type;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Resource\ResourceCategoryEnum;

/**
 * Resource type list.
 *
 * @method WlModelRequest get() Returns list of resource types in the business.  When {@link \Wl\Resource\Type\ResourceTypeListApi::$is_franchise} is set, the search is expanded to every  business in the franchise and resource types that a franchisee already imported from the  franchisor are skipped, so each resource type appears only once. The result can be  narrowed to a single resource category with {@link \Wl\Resource\Type\ResourceTypeListApi::$id_category}.
 */
class ResourceTypeListModel extends WlModelAbstract
{
  /**
 * Resource type list:
 *
 * <dl>
 *   <dt>int `id_category`</dt>
 *   <dd>
 *     Type of the resource. One of {@link ResourceCategoryEnum} cases.
 * 
 * 1 - if this is a bookable asset.
 * 2 - if this is an off-site location with its own address.
 *   </dd>
 * 
 *   <dt>bool `is_active`</dt>
 *   <dd>Whether resource type is active.</dd>
 * 
 *   <dt>string `k_resource_type`</dt>
 *   <dd>Resource type key. </dd>
 * 
 *   <dt>string `text_title`</dt>
 *   <dd>Resource type title.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_resource_type;

  /**
 * Type of the resource.
 *
 * 1 - if this is a bookable asset.
 * 2 - if this is an off-site location with its own address.
 *
 * @get get
 * @var int
 * @see ResourceCategoryEnum
 */
  public $id_category = 0;

  /**
 * Whether to return franchisee-created resource types (if business is franchisor).
 * <tt>true</tt> to include franchisee-created resource types.
 *
 * @get get
 * @var bool
 */
  public $is_franchise = false;

  /**
 * Business key, to load resource types for.
 *
 * @get get
 * @var string
 */
  public $k_business = '';
}

?>