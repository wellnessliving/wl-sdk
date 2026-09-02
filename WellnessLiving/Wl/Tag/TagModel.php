<?php

namespace WellnessLiving\Wl\Tag;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets and removes revenue categories (tags) of the business.
 *
 * @method WlModelRequest delete() Removes the tag.  Deletes the revenue category from the business. The deletion fails if the tag is currently set as the primary revenue category for any linked asset, class, coupon, promotion, service, or product (promotions that have already been removed are ignored). On success, notifies listeners about the affected linked objects and invalidates the cached tag list of the business.
 * @method WlModelRequest get() Returns revenue categories (tags) of the business.  Returns tags along with the bookable assets, classes, coupons, promotions, services, and products assigned to each one.
 */
class TagModel extends WlModelAbstract
{
  /**
   * The revenue categories (tags) of the business.
   *
   * Keys refer to tag keys . Values have the next structure:
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
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The resource title.</dd>
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
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The class title.</dd>
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
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The coupon title.</dd>
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
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The promotion title.</dd>
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
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The service title.</dd>
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
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The product title.</dd>
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