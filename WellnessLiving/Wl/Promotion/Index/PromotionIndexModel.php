<?php

namespace WellnessLiving\Wl\Promotion\Index;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of introductory promotion offers of a specified type available at a given location.
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
   *     Information about services, which can be visited with this pass or membership.
   *     <dl>
   *       <dt>array[] <var>a_class</var></dt>
   *       <dd>List of available classes. Each element has key k_class, where primary key of the class
   *         can be found.</dd>
   *       <dt>array[] <var>a_event</var></dt>
   *       <dd>List of available events. Each element has key k_class, where primary key of the event
   *         can be found.</dd>
   *       <dt>array[] <var>a_resource</var></dt>
   *       <dd>List of available assets. Each element has key k_resource, where primary key of the asset can be found.</dd>
   *       <dt>array[] <var>a_service</var></dt>
   *       <dd>List of available appointment types. Each element has key k_service, where primary key of the
   *         appointment type can be found.</dd>
   *       <dt>bool <var>is_class_all</var></dt>
   *       <dd>`true` if any class in the business can be visited with this PO. `false` if only selected classes.
   *         Selected classes can be found in the list of available classes and events.</dd>
   *       <dt>bool <var>is_event_all</var></dt>
   *       <dd>`true` if any event in the business can be visited with this PO. `false` if only selected events.
   *         Selected events can be found in the list of available classes and events.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array <var>a_image</var>
   *   </dt>
   *   <dd>
   *     Empty array, if purchase option does not have image.
   *     Information about purchase option image otherwise:
   *     <dl>
   *       <dt>string <var>i_height</var></dt>
   *       <dd>Height of the image.</dd>
   *       <dt>string <var>i_width</var></dt>
   *       <dd>Width of the image.</dd>
   *       <dt>string <var>url-thumbnail</var></dt>
   *       <dd>Link to the image.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>dl_expire</var>
   *   </dt>
   *   <dd>
   *     Local expiration date. This is the last day, when purchase option is active.
   *     Is used only, when duration type "Expires on a certain date". Should be ignored otherwise.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     Number of periods for the duration type "Period".
   *     For example, if duration of the purchase option is 12 months, this field will be equal 12.
   *   </dd>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *     Number of visits, which can use owner of the purchase option.
   *     `0` if purchase option has unlimited visits.
   *   </dd>
   *   <dt>
   *     int <var>id_duration</var>
   *   </dt>
   *   <dd>
   *     Type of periods for the duration type "Period".
   *     For example, if duration of the purchase option is 12 months, this field will be equal id of the Month.
   *     See all possible options here: {@link \ADurationSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_duration_type</var>
   *   </dt>
   *   <dd>
   *     Type of the duration. Can be "Without End", 'Expires on a certain date', 'Period'.
   *     See more information here: {@link \RsDurationTypeSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program</var>
   *   </dt>
   *   <dd>
   *     Type of the purchase options. The <var>id_program</var> relates to only one <var>id_program_type</var> and one
   *     <var>id_program_category</var>.
   *     See more information here: {@link \RsProgramSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program_category</var>
   *   </dt>
   *   <dd>
   *     Category of the program for promotions. The <var>id_program_category</var> relates to more than one
   *     <var>id_program</var>.
   *     See more information here: {@link \RsProgramCategorySid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program_type</var>
   *   </dt>
   *   <dd>
   *     ID of promotion program type. The <var>id_program_type</var> relates to more than one <var>id_program</var>.
   *     See more information here: {@link \RsProgramTypeSid}.
   *   </dd>
   *   <dt>
   *     bool <var>is_direct_buy_only</var>
   *   </dt>
   *   <dd>
   *     `true` if pricing option can be sold only by direct link. This means it should not be shown in online store or
   *   explorer.
   *     `false` - otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_introductory</var>
   *   </dt>
   *   <dd>
   *     If <tt>true</tt> this promotion is for introductory clients. Otherwise - <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool <var>is_online</var>
   *   </dt>
   *   <dd>
   *     If <tt>true</tt> this promotion is available for online purchase. Otherwise - <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     string <var>k_promotion</var>
   *   </dt>
   *   <dd>
   *     Promotion primary key in {@link \RsPromotionSql} table.
   *   </dd>
   *   <dt>
   *     string <var>m_price</var>
   *   </dt>
   *   <dd>
   *     Price.
   *   </dd>
   *   <dt>
   *     string <var>text_description</var>
   *   </dt>
   *   <dd>
   *     Description.
   *   </dd>
   *   <dt>
   *     int <var>text_program</var>
   *   </dt>
   *   <dd>
   *     Localised promotion program name corresponding to the value of <var>id_program</var>.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Title.
   *   </dd>
   *   <dt>
   *     string <var>url_buy</var>
   *   </dt>
   *   <dd>
   *     Direct URL to the promotion purchase page.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * The program type ID, which will be one of the {@link \RsProgramTypeSid} constants.
   *
   * `0` to not filter purchase options with type of the purchase option.
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