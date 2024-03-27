<?php

namespace WellnessLiving\Wl\Promotion;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlDurationTypeSid;
use WellnessLiving\Wl\WlProgramSid;

/**
 * An endpoint that gets promotions for the specified business and promotion keys.
 */
class PromotionModel extends WlModelAbstract
{
  /**
   * Promotion information.
   * <dl>
   *   <dt>
   *     array <var>a_access</var>
   *   </dt>
   *   <dd>
   *     Information about services that can be attended with this pass or membership.
   *     <dl>
   *       <dt>array[] <var>a_class</var></dt>
   *       <dd>A list of available classes.</dd>
   *       <dt>array[] <var>a_event</var></dt>
   *       <dd>A list of available events.</dd>
   *       <dt>array[] <var>a_resource</var></dt>
   *       <dd>A list of available assets.</dd>
   *       <dt>array[] <var>a_service</var></dt>
   *       <dd>A list of available appointment types.</dd>
   *       <dt>bool <var>is_class_all</var></dt>
   *       <dd>This will be `true` if any class in the business can be visited with this Purchase Option. Otherwise, this
   *         will be `false` if only selected classes can be visited with this Purchase Option. Selected classes can be found
   *         in the list of available classes and events.</dd>
   *       <dt>bool <var>is_event_all</var></dt>
   *       <dd>This will be `true` if any event in the business can be visited with this Purchase Option. Otherwise, this
   *         will be `false` if only selected events can be visited with this Purchase Option. Selected events can be found
   *         in the list of available classes and events.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array <var>a_image</var>
   *   </dt>
   *   <dd>
   *     Information about Purchase Option image. This will be an empty array if the Purchase Option doesn't have an image.
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
   *     string <var>dl_expire</var>
   *   </dt>
   *   <dd>
   *     The local expiration date. This is the last day when the Purchase Option is active.
   *     This is used only when the 'Expires on a certain date' duration type is set.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     The number of periods for the 'Period' duration type.
   *     For example, if the duration of the Purchase Option is 12 months, this field will be 12.
   *   </dd>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *     The number of visits that the owner can use for the Purchase Option.
   *     This will be `0` if the Purchase Option allows for unlimited visits.
   *   </dd>
   *   <dt>
   *     int <var>id_duration</var>
   *   </dt>
   *   <dd>
   *     The type of period for the 'Period' duration type.
   *     For example, if the duration of the Purchase Option is 12 months, this field will display the ID of the month.
   *     For all possible options, see {@link ADurationSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_duration_type</var>
   *   </dt>
   *   <dd>
   *     The duration type. Possible duration types can be 'Without End', 'Expires on a certain date', 'Period'.
   *     For more information, see {@link WlDurationTypeSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program</var>
   *   </dt>
   *   <dd>
   *     The Purchase Option type.
   *     For more information, see {@link WlProgramSid}.
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
   *     If `true`, this promotion is available for online purchase. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     string <var>k_promotion</var>
   *   </dt>
   *   <dd>
   *     The key of the promotion.
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
   *     The description of the Purchase Option.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The title of the Purchase Option.
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
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the promotion.
   *
   * @get get
   * @var string
   */
  public $k_promotion = '0';
}

?>