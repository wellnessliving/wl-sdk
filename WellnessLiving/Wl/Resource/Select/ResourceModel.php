<?php

namespace WellnessLiving\Wl\Resource\Select;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Resources list.
 *
 * @method WlModelRequest get() Returns resources list in the business.
 */
class ResourceModel extends WlModelAbstract
{
  /**
   * Resources list:
   *
   * <dl>
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether resource is active.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Resource name.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_resource;

  /**
   * Resources period data list:
   *
   * <dl>
   *   <dt>string `html_title`</dt>
   *   <dd>Title of resources period.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Duration of asset.</dd>
   * 
   *   <dt>bool `is_select`</dt>
   *   <dd><tt>true</tt> if asset was selected. <tt>false</tt> in other cases.</dd>
   * 
   *   <dt>bool `is_visible`</dt>
   *   <dd><tt>true</tt> if asset are visible. <tt>false</tt> in other cases.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Asset key.</dd>
   * 
   *   <dt>string `k_resource_type`</dt>
   *   <dd>Key of asset category.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_resource_period;

  /**
   * Resources period one template.
   *
   * @get result
   * @var string
   */
  public $html_period_one;

  /**
   * Duration of the service in minutes.
   * <tt>null</tt> if duration not set.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * ID of the purchase item.
   * One of {@link WlPurchaseItemSid} constants.
   * <tt>null</tt> if purchase item id not set.
   *
   * @get get
   * @var int
   */
  public $id_purchase_item = null;

  /**
   * If return only bookable resources. If <tt>false</tt> returns all resources.
   *
   * @get get
   * @var bool
   */
  public $is_book = true;

  /**
   * If need period only data.
   *
   * @get get
   * @var bool
   */
  public $is_period_only = false;

  /**
   * Is resource period data needed. <tt>true</tt> if need resource period data.
   *   <tt>false</tt> if this data not need.
   *
   * @get get
   * @var bool
   */
  public $is_resource_period = false;

  /**
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Location to show resource.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * Whether duration is empty. <tt>true</tt> if duration not empty.
   *   <tt>false</tt> if duration empty.
   *
   * @get get
   * @var bool
   */
  public $not_duration_empty = false;
}

?>