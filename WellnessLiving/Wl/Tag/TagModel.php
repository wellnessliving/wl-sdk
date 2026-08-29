<?php

namespace WellnessLiving\Wl\Tag;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets and removes revenue categories (tags) of the business.
 *
 * @method WlModelRequest delete() Removes the tag.
 * @method WlModelRequest get() Returns revenue categories (tags) of the business.  Returns tags along with the bookable assets, classes, coupons, promotions, services, and products assigned to each one.
 */
class TagModel extends WlModelAbstract
{
  /**
   * The revenue categories (tags) of the business.
   *
   * Values have the next structure:
   *
   * <dl>
   *   <dt>array[] `a_asset`</dt>
   *   <dd>
   *     Bookable assets assigned to the tag. Each element has the next structure:
   *     <dl>
   *       <dt>string `k_id`</dt>
   *       <dd>The resource key. </dd>
   * 
   *       <dt>bool `is_primary`</dt>
   *       <dd>Whether the tag is the primary revenue category for the resource.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_class`</dt>
   *   <dd>
   *     Classes and events assigned to the tag. Each element has the next structure:
   *     <dl>
   *       <dt>string `k_id`</dt>
   *       <dd>The class key. </dd>
   * 
   *       <dt>bool `is_primary`</dt>
   *       <dd>Whether the tag is the primary revenue category for the class.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_coupon`</dt>
   *   <dd>
   *     Gift cards assigned to the tag. Each element has the next structure:
   *     <dl>
   *       <dt>string `k_id`</dt>
   *       <dd>The coupon key. </dd>
   * 
   *       <dt>bool `is_primary`</dt>
   *       <dd>Whether the tag is the primary revenue category for the coupon.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_promotion`</dt>
   *   <dd>
   *     Purchase options (passes and memberships) assigned to the tag. Each element has the next structure:
   *     <dl>
   *       <dt>string `k_id`</dt>
   *       <dd>The promotion key. </dd>
   * 
   *       <dt>bool `is_primary`</dt>
   *       <dd>Whether the tag is the primary revenue category for the promotion.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_service`</dt>
   *   <dd>
   *     Appointment types assigned to the tag. Each element has the next structure:
   *     <dl>
   *       <dt>string `k_id`</dt>
   *       <dd>The service key. </dd>
   * 
   *       <dt>bool `is_primary`</dt>
   *       <dd>Whether the tag is the primary revenue category for the service.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_product`</dt>
   *   <dd>
   *     Store products assigned to the tag. Each element has the next structure:
   *     <dl>
   *       <dt>string `k_id`</dt>
   *       <dd>The product key. </dd>
   * 
   *       <dt>bool `is_primary`</dt>
   *       <dd>Whether the tag is the primary revenue category for the product.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_sort`</dt>
   *   <dd>The sort order of the tag.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The tag title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_tag = [];

  /**
   * The business key of the tags.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The tag key.
   *
   * Optional for {@link TagApi::get()}: if specified,
   * only this tag is returned; if not specified, all tags of the business are returned.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $k_tag = '';
}

?>