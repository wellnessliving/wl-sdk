<?php

namespace WellnessLiving\Wl\Promotion;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlDurationTypeSid;
use WellnessLiving\Wl\WlProgramSid;

/**
 * Gets promotions for the specified business and promotion keys.
 */
class PromotionModel extends WlModelAbstract
{
  /**
   * Promotion information.
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
   *         This will be `true` if any class in the business can be visited with this Purchase Option.
   * Otherwise, this will be `false` if only selected classes can be visited with this Purchase Option.
   * Selected classes can be found in the list of available classes and events.
   *       </dd>
   * 
   *       <dt>bool `is_event_all`</dt>
   *       <dd>
   *         This will be `true` if any event in the business can be visited with this Purchase Option.
   * Otherwise, this will be `false` if only selected events can be visited with this Purchase Option.
   * Selected events can be found in the list of available classes and events.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     Information about Purchase Option image.
   * This will be an empty array if the Purchase Option doesn't have an image.
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
   *   <dt>string[] `a_location`</dt>
   *   <dd>
   *     A list of locations where this promotion is available.
   * 
   *   </dd>
   * 
   *   <dt>string[] `a_login_type`</dt>
   *   <dd>
   *     A list of login types linked with this promotion.
   * 
   *   </dd>
   * 
   *   <dt>string[] `a_member_group`</dt>
   *   <dd>
   *     A list of login types linked with this promotion.
   * 
   *   </dd>
   * 
   *   <dt>string[] `a_tag`</dt>
   *   <dd>List of selected tags. </dd>
   * 
   *   <dt>string `dl_expire`</dt>
   *   <dd>
   *     The local expiration date. This is the last day when the Purchase Option is active.
   *  This is used only when the 'Expires on a certain date' duration type is set.
   *   </dd>
   * 
   *   <dt>string `dl_terminate`</dt>
   *   <dd>Date when promotion should be terminated. `null` if there is no terminate date.</dd>
   * 
   *   <dt>string `f_revenue_single`</dt>
   *   <dd>Approximate revenue per session value.
   * </dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>
   *     The number of periods for the 'Period' duration type.
   * For example, if the duration of the Purchase Option is 12 months, this field will be 12.
   *   </dd>
   * 
   *   <dt>int `i_limit`</dt>
   *   <dd>
   *     The number of visits that the owner can use for the Purchase Option.
   * This will be `0` if the Purchase Option allows for unlimited visits.
   *   </dd>
   * 
   *   <dt>int `id_duration`</dt>
   *   <dd>
   *     The type of period for the 'Period' duration type.
   * For example, if the duration of the Purchase Option is 12 months, this field will display the ID of the month.
   * For all possible options, see {@link ADurationSid}.
   *   </dd>
   * 
   *   <dt>int `id_duration_type`</dt>
   *   <dd>
   *     The duration type. Possible duration types can be 'Without End', 'Expires on a certain date', 'Period'.
   * For more information, see {@link WlDurationTypeSid}.
   *   </dd>
   * 
   *   <dt>int `id_program`</dt>
   *   <dd>The Purchase Option type.
   * For more information, see {@link WlProgramSid}.</dd>
   * 
   *   <dt>int `id_restriction`</dt>
   *
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether this promotion is active. </dd>
   * 
   *   <dt>bool `is_business_wide`</dt>
   *   <dd>
   *     Whether this promotion is available for all locations of the business.
   * 
   *   </dd>
   * 
   *   <dt>bool `is_introductory`</dt>
   *   <dd>If `true`, this promotion is for introductory clients. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_online`</dt>
   *   <dd>If `true`, this promotion is available for online purchase. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_payroll`</dt>
   *   <dd>
   *     Whether clients who purchase this item excluded from payroll calculations.
   * 
   *   </dd>
   * 
   *   <dt>bool `is_revenue_single`</dt>
   *   <dd>
   *     If `true` need to add approximate revenue per session value.
   * 
   *   </dd>
   * 
   *   <dt>bool `is_use`</dt>
   *   <dd>Whether promotion can be used for booking. `null` if there is no termination.</dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>The key of the promotion. </dd>
   * 
   *   <dt>string `k_tag_primary`</dt>
   *   <dd>Primary tag. </dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>The price.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>The description of the Purchase Option.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The title of the Purchase Option.</dd>
   * 
   *   <dt>string `url_buy`</dt>
   *   <dd>The direct URL to the promotion purchase page.</dd>
   * 
   *   <dt>string `url_catalog`</dt>
   *   <dd>The direct URL to the promotion details page in the online store.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array[]
   */
  public $a_promotion;

  /**
   * The key of the business.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the promotion.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_promotion = '0';

  /**
   * Guest passes settings for promotion. This will be `null` if there are no guest pass settings for the promotion.
   *
   * @field a_guest_settings
   * @get result
   * @post post
   * @var GuestPassSettingsEntity|array|null
   */
  public $o_guest_settings = null;
}

?>