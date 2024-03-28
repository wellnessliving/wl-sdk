<?php

namespace WellnessLiving\Wl\Promotion\Index;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Promotion\Edit\Limit\Cycle\Sid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlDurationTypeSid;
use WellnessLiving\Wl\WlProgramCategorySid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * An endpoint that gets a list of introductory promotion offers of a specified type available at a given location.
 */
class PromotionIndexModel extends WlModelAbstract
{
  /**
   * A list of introductory promotion offers available at the location.
   * Every element is an array with the following keys:
   * <dl>
   *   <dt>
   *     array <var>a_access</var>
   *   </dt>
   *   <dd>
   *     Information about services that can be attended with this pass or membership.
   *     <dl>
   *       <dt>array[] <var>a_class</var></dt>
   *       <dd>
   *         A list of available classes. Each element has the key `k_class`, where the primary key of the class can be found.
   *
   *       </dd>
   *       <dt>array[] <var>a_event</var></dt>
   *       <dd>
   *         A list of available events. Each element has the key `k_class`, where the primary key of the event can be found.
   *
   *       </dd>
   *       <dt>array[] <var>a_resource</var></dt>
   *       <dd>
   *         A list of available assets. Each element has the key `k_resource`, where the primary key of the asset can be found.
   *
   *       </dd>
   *       <dt>array[] <var>a_service</var></dt>
   *       <dd>
   *         A list of available appointment types. Each element has the key `k_service`, where the primary key of the
   *         appointment type can be found.
   *
   *       </dd>
   *       <dt>bool <var>is_class_all</var></dt>
   *       <dd>If `true`, any class in the business can be visited with this Purchase Option. If `false`, only selected classes can be visited.
   *         Selected classes can be found in the list of available classes and events.</dd>
   *       <dt>bool <var>is_event_all</var></dt>
   *       <dd>If `true`, if any event in the business can be visited with this Purchase Option. If `false`, if only selected events can be visited.
   *         Selected events can be found in the list of available classes and events.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array[] <var>a_component</var>
   *   </dt>
   *   <dd>
   *     A list of components included in the Purchase Option if this Purchase Option is a package.
   *     If it's not a package, the list will be always empty.
   *     If it's a package, the list can still be empty if all its components were deactivated.
   *     This means that this array can't be used to determine whether this is a package or not (check `id_program` or `id_program_type`
   *     value instead).
   *     There can be three types of components: events, Purchase Options, and products.
   *     Some fields can be different depending on type of the component, but each element of the array includes:
   *     <dl>
   *       <dt>int <var>id_purchase_item</var></dt>
   *       <dd>The type of the component. This can only be {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid::ENROLLMENT},
   *          {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid::PROMOTION} or {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid::PRODUCT}.</dd>
   *       <dt>string <var>k_id</var></dt>
   *       <dd>
   *         The primary key of the component in the related table. This depends on the type of the component.
   *         The key of the event for {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid::ENROLLMENT}, the key of the Purchase Option for the
   *         {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid::PROMOTION}, the key of the product option for the {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid::PRODUCT}.
   *         Full information about events can be taken from the {@link \WellnessLiving\Wl\Event\EventListModel}. Purchase Options from the {@link \WellnessLiving\Wl\Promotion\Index\PromotionIndexModel}.
   *         Full information about products are not available at this moment though API.
   *       </dd>
   *       <dt>int <var>i_quantity</var></dt>
   *       <dd>The quantity. If empty, it means the quantity is 1.</dd>
   *       <dt>string <var>text_title</var></dt>
   *       <dd>The name of the component.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array <var>a_image</var>
   *   </dt>
   *   <dd>
   *     This will be an empty array if the Purchase Option doesn't have image.
   *     Otherwise, this will display the following information about the Purchase Option image:
   *     <dl>
   *       <dt>string <var>i_height</var></dt>
   *       <dd>The height of the image.</dd>
   *       <dt>string <var>i_width</var></dt>
   *       <dd>The width of the image.</dd>
   *       <dt>string <var>url-thumbnail</var></dt>
   *       <dd>The link to the image.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array <var>a_visit_limit</var>
   *   </dt>
   *   <dd>
   *     Attendance restrictions, if available. If unavailable, this will be an empty array. Every element has a key, which is a type of
   *     the time period {@link \WellnessLiving\Core\a\ADurationSid::DAY}, {@link \WellnessLiving\Core\a\ADurationSid::WEEK}, {@link \WellnessLiving\Core\a\ADurationSid::MONTH},
   *     {@link \WellnessLiving\Core\a\ADurationSid::YEAR}.
   *     The values are:
   *     <dl>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The quantity of sessions every <var>i_period</var>.</dd>
   *       <dt>int <var>i_period</var></dt>
   *       <dd>The duration of the time period. This depends on a key of <var>a_visit_limit</var> array.</dd>
   *       <dt>int <var>i_roll_over_cap</var></dt>
   *       <dd>The limit number of rollover sessions.</dd>
   *       <dt>int <var>i_roll_over_expire</var></dt>
   *       <dd>The duration of the time period after which rolled over session will expire.</dd>
   *       <dt>int <var>id_roll_over_expire</var></dt>
   *       <dd>
   *         The type of <var>i_roll_over_expire</var> {@link \WellnessLiving\Core\a\ADurationSid::DAY}, {@link \WellnessLiving\Core\a\ADurationSid::WEEK},
   *         {@link \WellnessLiving\Core\a\ADurationSid::MONTH}, {@link \WellnessLiving\Core\a\ADurationSid::YEAR}.
   *       </dd>
   *       <dt>int <var>id_limit_cycle</var></dt>
   *       <dd>The type of the limit cycle {@link Sid}.</dd>
   *       <dt>bool <var>is_reconcile_visit</var></dt>
   *       <dd>Determines whether to reconcile unpaid sessions on restrictions reset.</dd>
   *       <dt>bool <var>is_roll_over_expire</var></dt>
   *       <dd>Determines if the rolled over session is expired.</dd>
   *       <dt>bool <var>is_roll_over_renew</var></dt>
   *       <dd>Determines whether to rollover sessions upon auto-renew.</dd>
   *       <dt>bool <var>is_rollup</var></dt>
   *       <dd>Determines Whether to rollover sessions.</dd>
   *       <dt>bool <var>is_visit_conversion</var></dt>
   *       <dd>Determines whether to convert remaining visits.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>dl_expire</var>
   *   </dt>
   *   <dd>
   *     The local expiration date. This is the last day of the Purchase Option's active status.
   *     This is used only for the 'Expires on a certain date' duration type. Otherwise, this should be ignored.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     The number of periods for the "Period" duration type.
   *     For example, if the duration of the Purchase Option is 12 months, this field will be 12.
   *   </dd>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *     The number of visits that the owner of the Purchase Option can use.
   *     This will be `0` if the Purchase Option has unlimited visits.
   *   </dd>
   *   <dt>
   *     int <var>i_limit_duration</var>
   *   </dt>
   *   <dd>
   *     The maximum number of minutes or hours depending on <var>id_limit_duration</var> that the current promotion can be used in.
   *   </dd>
   *   <dt>
   *     int <var>id_limit_duration</var>
   *   </dt>
   *   <dd>
   *     The type of <var>i_limit_duration</var> {@link \WellnessLiving\Core\a\ADurationSid::MINUTE} or {@link \WellnessLiving\Core\a\ADurationSid::HOUR}.
   *   </dd>
   *   <dt>
   *     int <var>id_duration</var>
   *   </dt>
   *   <dd>
   *     The type of periods for the duration type "Period".
   *     For example, if the duration of the Purchase Option is 12 months, this field will be the ID of the month.
   *     See all the possible options here: {@link ADurationSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_duration_type</var>
   *   </dt>
   *   <dd>
   *     The type of the duration. This can be "Without End", "Expires on a certain date", "Period".
   *     See more information here: {@link WlDurationTypeSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program</var>
   *   </dt>
   *   <dd>
   *     The type of the Purchase Option. The <var>id_program</var> relates to only one <var>id_program_type</var> and one
   *     <var>id_program_category</var>.
   *     See more information here: {@link WlProgramSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program_category</var>
   *   </dt>
   *   <dd>
   *     The category of the program for promotions. The <var>id_program_category</var> relates to more than one
   *     <var>id_program</var>.
   *     See more information here: {@link WlProgramCategorySid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program_type</var>
   *   </dt>
   *   <dd>
   *     The ID of the promotion program type. The <var>id_program_type</var> relates to more than one <var>id_program</var>.
   *     See more information here: {@link WlProgramTypeSid}.
   *   </dd>
   *   <dt>
   *     bool <var>is_direct_buy_only</var>
   *   </dt>
   *   <dd>
   *     If `true`, the pricing option can be sold only by direct link. This means it shouldn't be shown in the store or
   *     explorer. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_introductory</var>
   *   </dt>
   *   <dd>
   *     If `true`, this promotion is for introductory clients. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_online</var>
   *   </dt>
   *   <dd>
   *     If `true` this promotion is available for online purchase. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     string <var>k_promotion</var>
   *   </dt>
   *   <dd>
   *     The promotion key.
   *   </dd>
   *   <dt>
   *     string <var>m_price</var>
   *   </dt>
   *   <dd>
   *     The price.
   *   </dd>
   *   <dt>
   *     string <var>text_description</var>
   *   </dt>
   *   <dd>
   *     The description.
   *   </dd>
   *   <dt>
   *     int <var>text_program</var>
   *   </dt>
   *   <dd>
   *     The localized promotion program name corresponding to the value of <var>id_program</var>.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The title.
   *   </dd>
   *   <dt>
   *     string <var>url_buy</var>
   *   </dt>
   *   <dd>
   *     The direct URL to the promotion purchase page.
   *   </dd>
   * </dl>
   *
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
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>