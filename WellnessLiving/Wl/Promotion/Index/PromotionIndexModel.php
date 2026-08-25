<?php

namespace WellnessLiving\Wl\Promotion\Index;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Event\EventListModel;
use WellnessLiving\Wl\Promotion\Edit\Limit\Cycle\Sid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlDurationTypeSid;
use WellnessLiving\Wl\WlProgramCategorySid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Gets a list of introductory promotion offers of a specified type available at a given location.
 *
 * @method WlModelRequest get() Gets a list of packages/passes/memberships.  Returns introductory promotion offers available at the specified location, optionally filtered by program type, including pricing, duration, visit limits, and access information for each item.
 */
class PromotionIndexModel extends WlModelAbstract
{
  /**
   * A list of introductory promotion offers available at the location.
   * Every element is an array with the following keys:
   *
   * <dl>
   *   <dt>array `a_access`</dt>
   *   <dd>
   *     Information about services that can be attended with this pass or membership.
   *     <dl>
   *       <dt>array[] `a_class`</dt>
   *       <dd>
   *         A list of available classes.
   *         <dl>
   *           <dt>string `k_class`</dt>
   *           <dd>Key of the class.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_event`</dt>
   *       <dd>
   *         A list of available events.
   *         <dl>
   *           <dt>string `k_class`</dt>
   *           <dd>Key of the event.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_resource`</dt>
   *       <dd>
   *         A list of available assets.
   *         <dl>
   *           <dt>string `k_resource`</dt>
   *           <dd>Key of the asset.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array[] `a_service`</dt>
   *       <dd>
   *         A list of available appointment types.
   *         <dl>
   *           <dt>string `k_service`</dt>
   *           <dd>Key of the appointment type.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>bool `is_class_all`</dt>
   *       <dd>
   *         If `true`, any class in the business can be visited with this Purchase Option. If `false`, only selected classes can be visited.
   * Selected classes can be found in the list of available classes and events.
   *       </dd>
   * 
   *       <dt>bool `is_event_all`</dt>
   *       <dd>
   *         If `true`, if any event in the business can be visited with this Purchase Option. If `false`, if only selected events can be visited.
   * Selected events can be found in the list of available classes and events.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_component`</dt>
   *   <dd>
   *     A list of components included in the Purchase Option if this Purchase Option is a package.
   * If it's not a package, the list will be always empty.
   * If it's a package, the list can still be empty if all its components were deactivated.
   * This means that this array can't be used to determine whether this is a package or not (check `id_program` or `id_program_type`
   * value instead).
   * There can be three types of components: events, Purchase Options, and products.
   * Some fields can be different depending on type of the component, but each element of the array includes:
   *     <dl>
   *       <dt>int `id_purchase_item`</dt>
   *       <dd>
   *         The type of the component.
   *  One of {@link WlPurchaseItemSid} constants.
   *  This can only be: <ul>
   *      <li>{@link WlPurchaseItemSid::ENROLLMENT}</li>
   *      <li>{@link WlPurchaseItemSid::PROMOTION}</li>
   *      <li>{@link WlPurchaseItemSid::PRODUCT}</li>
   *  </ul>
   *       </dd>
   * 
   *       <dt>string `k_id`</dt>
   *       <dd>
   *         The primary key of the component in the related table. This depends on the type of the component.
   * The key of the event for {@link WlPurchaseItemSid::ENROLLMENT}, the key of the Purchase Option for the
   * {@link WlPurchaseItemSid::PROMOTION}, the key of the product option for the {@link WlPurchaseItemSid::PRODUCT}.
   * Full information about events can be taken from the {@link EventListModel}. Purchase Options from the {@link PromotionIndexModel}.
   * Full information about products are not available at this moment though API.
   *       </dd>
   * 
   *       <dt>int `i_quantity`</dt>
   *       <dd>The quantity. If empty, it means the quantity is 1.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The name of the component.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     This will be an empty array if the Purchase Option doesn't have image.
   * Otherwise, this will display the following information about the Purchase Option image:
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>The height of the image.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>The width of the image.</dd>
   * 
   *       <dt>string `url-thumbnail`</dt>
   *       <dd>The link to the image.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_visit_limit`</dt>
   *   <dd>
   *     Attendance restrictions, if available. If unavailable, this will be an empty array. Every element has a key, which is a type of
   * the time period {@link ADurationSid::DAY}, {@link ADurationSid::WEEK}, {@link ADurationSid::MONTH},
   * {@link ADurationSid::YEAR}.
   * The values are:
   *     <dl>
   *       <dt>int `i_limit`</dt>
   *       <dd>The quantity of sessions every <var>i_period</var>.</dd>
   * 
   *       <dt>int `i_period`</dt>
   *       <dd>The duration of the time period. This depends on a key of <var>a_visit_limit</var> array.</dd>
   * 
   *       <dt>int `i_roll_over_cap`</dt>
   *       <dd>The limit number of rollover sessions.</dd>
   * 
   *       <dt>int `i_roll_over_expire`</dt>
   *       <dd>The duration of the time period after which rolled over session will expire.</dd>
   * 
   *       <dt>int `id_roll_over_expire`</dt>
   *       <dd>
   *         The type of <var>i_roll_over_expire</var>.
   * One of {@link ADurationSid} contantant.
   * This can only be: <ul>
   *     <li>{@link ADurationSid::DAY}</li>
   *     <li>{@link ADurationSid::WEEK}</li>
   *     <li>{@link ADurationSid::MONTH}</li>
   *     <li>{@link ADurationSid::YEAR}</li>
   * </ul>
   *       </dd>
   * 
   *       <dt>int `id_limit_cycle`</dt>
   *       <dd>The type of the limit cycle {@link Sid}.</dd>
   * 
   *       <dt>bool `is_reconcile_visit`</dt>
   *       <dd>Determines whether to reconcile unpaid sessions on restrictions reset.</dd>
   * 
   *       <dt>bool `is_roll_over_expire`</dt>
   *       <dd>Determines if the rolled over session is expired.</dd>
   * 
   *       <dt>bool `is_roll_over_renew`</dt>
   *       <dd>Determines whether to rollover sessions upon auto-renew.</dd>
   * 
   *       <dt>bool `is_rollup`</dt>
   *       <dd>Determines Whether to rollover sessions.</dd>
   * 
   *       <dt>bool `is_visit_conversion`</dt>
   *       <dd>Determines whether to convert remaining visits.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dl_expire`</dt>
   *   <dd>
   *     The local expiration date. This is the last day of the Purchase Option's active status.
   * This is used only for the 'Expires on a certain date' duration type. Otherwise, this should be ignored.
   *   </dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>
   *     The number of periods for the "Period" duration type.
   * For example, if the duration of the Purchase Option is 12 months, this field will be 12.
   *   </dd>
   * 
   *   <dt>int `i_limit`</dt>
   *   <dd>
   *     The number of visits that the owner of the Purchase Option can use.
   * This will be `0` if the Purchase Option has unlimited visits.
   *   </dd>
   * 
   *   <dt>int `i_limit_duration`</dt>
   *   <dd>
   *     The maximum number of minutes or hours depending on <var>id_limit_duration</var> that the current promotion can be used in.
   *   </dd>
   * 
   *   <dt>int `i_payment_period`</dt>
   *   <dd>The number of `id_duration` periods between payments for memberships.</dd>
   * 
   *   <dt>int `id_limit_duration`</dt>
   *   <dd>
   *     The type of <var>i_limit_duration</var>.
   * One of {@link ADurationSid} contantant.
   * This can only be: <ul>
   *     <li>{@link ADurationSid::MINUTE}</li>
   *     <li>{@link ADurationSid::HOUR}</li>
   *     <li>{@link ADurationSid::MONTH}</li>
   *     <li>{@link ADurationSid::YEAR}</li>
   * </ul>
   *   </dd>
   * 
   *   <dt>int `id_duration`</dt>
   *   <dd>
   *     The type of periods for the duration type "Period".
   * For example, if the duration of the Purchase Option is 12 months, this field will be the ID of the month.
   * See all the possible options here: {@link ADurationSid}.
   *   </dd>
   * 
   *   <dt>int `id_duration_type`</dt>
   *   <dd>
   *     The type of the duration. This can be "Without End", "Expires on a certain date", "Period".
   * See more information here: {@link WlDurationTypeSid}.
   *   </dd>
   * 
   *   <dt>int `id_program`</dt>
   *   <dd>
   *     The type of the Purchase Option. The <var>id_program</var> relates to only one <var>id_program_type</var> and one
   * <var>id_program_category</var>.
   * See more information here: {@link WlProgramSid}.
   *   </dd>
   * 
   *   <dt>int `id_program_category`</dt>
   *   <dd>
   *     The category of the program for promotions. The <var>id_program_category</var> relates to more than one
   * <var>id_program</var>.
   * See more information here: {@link WlProgramCategorySid}.
   *   </dd>
   * 
   *   <dt>int `id_program_type`</dt>
   *   <dd>
   *     The ID of the promotion program type. The <var>id_program_type</var> relates to more than one <var>id_program</var>.
   * See more information here: {@link WlProgramTypeSid}.
   *   </dd>
   * 
   *   <dt>bool `is_direct_buy_only`</dt>
   *   <dd>
   *     If `true`, the pricing option can be sold only by direct link. This means it shouldn't be shown in the store or
   * explorer. Otherwise, this will be `false`.
   *   </dd>
   * 
   *   <dt>bool `is_introductory`</dt>
   *   <dd>If `true`, this promotion is for introductory clients. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_online`</dt>
   *   <dd>If `true` this promotion is available for online purchase. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>The promotion key. </dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>The price.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>The description.</dd>
   * 
   *   <dt>string `text_program`</dt>
   *   <dd>The localized promotion program name corresponding to the value of <var>id_program</var>.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The title.</dd>
   * 
   *   <dt>string `url_buy`</dt>
   *   <dd>The direct URL to the promotion purchase page.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The program type ID, which will be one of the {@link WlProgramTypeSid} constants.
   *
   * `0` to not filter Purchase Options with type of the Purchase Option.
   *
   * @get get
   * @var int
   */
  public $id_program_type = 0;

  /**
   * If `true`, purchase options are loaded for backend mode. Otherwise, this will be `false` if purchase options
   * are loaded for frontend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The business key.
   *
   * `null` to get a business from location.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>