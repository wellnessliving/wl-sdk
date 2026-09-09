<?php

namespace WellnessLiving\Wl\Resource\ResourceList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Resource\ResourceCategoryEnum;

/**
 * Asset list by business.
 *
 * @method WlModelRequest get() Returns assets list in the business.  Returns all assets if <tt>$id_category</tt> is not specified or only certain category assets. Includes   main information about assets.
 */
class ListModel extends WlModelAbstract
{
  /**
   * Resources list:
   *
   * <dl>
   *   <dt>bool `hide_application`</dt>
   *   <dd>
   *     Whether resource will be hidden in the White Label mobile application.
   *  <tt>true</tt> means that resource will not be displayed, <tt>false</tt> otherwise.
   *   </dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether resource is active.</dd>
   * 
   *   <dt>bool `is_book`</dt>
   *   <dd>Whether resource is bookable.</dd>
   * 
   *   <dt>string `k_city`</dt>
   *   <dd>Key of the city for off-site locations.}.
   * <tt>null</tt> if the resource is not an off-site location.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Resource key.</dd>
   * 
   *   <dt>string `k_resource_layout`</dt>
   *   <dd>Asset layout key.</dd>
   * 
   *   <dt>string `k_resource_type`</dt>
   *   <dd>Resource type key.</dd>
   * 
   *   <dt>string `text_address`</dt>
   *   <dd>
   *     Street address of the resource for off-site locations.
   * Empty string if the resource does not have an off-site address.
   *   </dd>
   * 
   *   <dt>string `text_city`</dt>
   *   <dd>
   *     Name of the city with region and country for off-site locations.
   * Empty string if the resource does not have an off-site address.
   *   </dd>
   * 
   *   <dt>string `text_guide`</dt>
   *   <dd>Additional directions or access tips for reaching an off-site location.
   * Empty string if not specified.</dd>
   * 
   *   <dt>string `text_postal`</dt>
   *   <dd>
   *     Postal code of the resource for off-site locations.
   * Empty string if the resource does not have an off-site address.
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Resource name.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_resource;

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
   * Whether to return franchisee-created resources (if business is franchisor).
   * <tt>true</tt> to include franchisee-created resources.
   *
   * @get get
   * @var bool
   */
  public $is_franchise = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>