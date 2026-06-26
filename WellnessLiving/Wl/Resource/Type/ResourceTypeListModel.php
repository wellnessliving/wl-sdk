<?php

namespace WellnessLiving\Wl\Resource\Type;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Resource type list.
 *
 * @method WlModelRequest get() Returns list of resource types in the business.
 */
class ResourceTypeListModel extends WlModelAbstract
{
  /**
   * Resource type list:
   *
   * <dl>
   *   <dt>int `id_category`</dt>
   *   <dd>
   *     Type of the resource.
   * 
   * 1 - if this is a bookable asset.
   * 2 - if this is an off-site location with its own address.
   *   </dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether resource type is active.</dd>
   * 
   *   <dt>string `k_resource_type`</dt>
   *
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
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>