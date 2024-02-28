<?php

namespace WellnessLiving\Wl\Classes\ClassView;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about a class element.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Displays information about the class schedule(s). Each element has the next structure:
   * <dl>
   *   <dt>array <var>a_schedule</var></dt>
   *   <dd>A list of class schedules. Each element has the next structure:
   *     <dl>
   *       <dt>array <var>a_repeat</var></dt>
   *       <dd>Schedule repeat options:
   *         <dl>
   *           <dt>int <var>i_repeat</var></dt>
   *           <dd>A count of the periods specified in <var>id_repeat</var>.</dd>
   *           <dt>int <var>id_repeat</var></dt>
   *           <dd>The measuring unit of <var>i_repeat</var>.</dd>
   *           </dl>
   *       </dd>
   *       <dt>string[] <var>a_staff_key</var></dt>
   *       <dd>A list of staff member keys that provide sessions for this schedule.</dd>
   *       <dt>string <var>dl_end</var></dt>
   *       <dd>
   *         The end date of the schedule in the location's time zone.
   *         This will be empty or zero if the schedule is ongoing.
   *       </dd>
   *       <dt>string <var>dl_start</var></dt>
   *       <dd>The start date of the schedule in location's time zone.</dd>
   *       <dt>int <var>i_day</var></dt>
   *       <dd>The day of the week where the class schedule exists, starting with 1 for Monday and ending with 7 for Sunday.</dd>
   *       <dt>int <var>i_duration</var></dt>
   *       <dd>The duration of the schedule sessions in minutes.</dd>
   *       <dt>int <var>is_cancel</var></dt>
   *       <dd>Defines whether the schedule canceled or not.</dd>
   *       <dt>string <var>k_location</var></dt>
   *       <dd>The location key of the schedule.</dd>
   *       <dt>string <var>m_price</var></dt>
   *       <dd>The price of a single session of the schedule.</dd>
   *       <dt>string <var>text_time</var></dt>
   *       <dd>The time of the session in the following format: `[start_time] - [end_time]` in the locale's time zone.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array <var>a_config</var></dt>
   *   <dd>Class-specific business policies. This will be <tt>null</tt> in cases when the business policy is used.</dd>
   *   <dt>array <var>a_search_tag</var></dt>
   *   <dd>Tags for quick search.</dd>
   *   <dt>array <var>a_visits_required</var></dt>
   *   <dd>Information about visits that should be reviewed prior to visiting this class/event.</dd>
   *   <dt>bool|null <var>has_own_image</var></dt>
   *   <dd>
   *     This field will be `true` if the image used for the class is an image uploaded in the class setup.
   *     If an image isn't uploaded in the class setup, but there's at least one image in Setup->Locations image slider,
   *     this field will be `false`.
   *     This field will be `null` if the class image isn't uploaded, and there are no images in location slider. In such cases, an empty image is used.
   *   </dd>
   *   <dt>string <var>html_description</var></dt>
   *   <dd>The browser-safe description.</dd>
   *   <dt>string <var>html_special_instruction</var></dt>
   *   <dd>Special instructions safe to be inserted to a browser.</dd>
   *   <dt>int <var>i_age_from</var></dt>
   *   <dd>The minimum age restriction.</dd>
   *   <dt>int <var>i_age_to</var></dt>
   *   <dd>The maximum age restriction.</dd>
   *   <dt>bool <var>is_age_public</var></dt>
   *   <dd>Determines whether age restriction exist and should be taken into account prior to booking this class/event.</dd>
   *   <dt>bool <var>is_bookable</var></dt>
   *   <dd>Determines whether clients can book the class or event online.</dd>w
   *   <dt>bool <var>is_online_private</var></dt>
   *   <dd>
   *     `true` — show classes only for clients who can book online.
   *     `false` — show classes for all clients.
   *   </dd>
   *   <dt>bool <var>is_promotion_client</var></dt>
   *   <dd>Determines whether clients of the business can see a list of applicable Purchase Options.</dd>
   *   <dt>bool <var>is_promotion_only</var></dt>
   *   <dd>Determines whether the item can be booked only using promotions.</dd>
   *   <dt>bool <var>is_promotion_staff</var></dt>
   *   <dd>Determines whether staff members of the business can see a list of applicable Purchase Options.</dd>
   *   <dt>bool <var>is_single_buy</var></dt>
   *   <dd>
   *     Determines whether the item can be paid with Drop In or not.
   *     If it can be paid with Drop In, then `m_price` shows the price for one visit.
   *     If this is `0`, it means the class is free.
   *   </dd>
   *   <dt>bool <var>is_virtual</var></dt>
   *   <dd>Determines whether the item is virtual.</dd>
   *   <dt>bool <var>is_event</var></dt>
   *   <dd>Determines whether the item is an event or class instance. If `true`, the item is an event instance. Otherwise, this will be `false`.</dd>
   *   <dt>string <var>k_class</var></dt>
   *   <dd>The class key.</dd>
   *   <dt>string <var>m_price</var></dt>
   *   <dd>Drop In price, if the class allows payment for one visit.</dd>
   *   <dt>bool <var>show_special_instructions</var></dt>
   *   <dd>This will be `true` if special instructions can be public. Otherwise, this will be `false` if they should only be shown to the clients who booked the class.</dd>
   *   <dt>string <var>xml_description</var></dt>
   *   <dd>The item description.</dd>
   *   <dt>string <var>xml_special_instruction</var></dt>
   *   <dd>The item's special instructions.</dd>
   *   <dt>string <var>url_image</var></dt>
   *   <dd>The URL link to the item image.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_class_list = [];

  /**
   * The image height in pixels. Specify this value if you need the image to be returned in a specific size.
   * If this value isn't specified, the returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * The image width in pixels. Specify this value if you need the image to be returned in a specific size.
   * If this value isn't specified, the returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The class key used to get information for a specific class.
   *
   * An empty value returns information for all classes of the business.
   *
   * @get get
   * @var string
   */
  public $k_class = '';

  /**
   * Defines if canceled schedules should be included in the result.
   *
   * If `true`, canceled schedules will be shown. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $show_cancelled = false;
}

?>