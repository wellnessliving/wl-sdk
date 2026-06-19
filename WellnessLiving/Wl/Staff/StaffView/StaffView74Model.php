<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;

/**
 * Returns information about a specified staff member.
 *
 * This method can accept one staff UID {@link StaffView74Model::$uid_staff} or a staff UID list
 * {@link StaffView74Model::$a_uid_staff_list} but not both an exception would be thrown.
 */
class StaffView74Model extends WlModelAbstract
{
  /**
   * An array containing information about the classes this staff member is running.
   * Each element contains another array with three elements:
   *
   * <dl>
   *   <dt>array `a_class_period`</dt>
   *   <dd>
   *     A list of sessions in the day:
   *     <dl>
   *       <dt>string `dt_time`</dt>
   *       <dd>The session start time in MySQL format.</dd>
   * 
   *       <dt>int `i_duration`</dt>
   *       <dd>The session duration in seconds.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>The class name.</dd>
   * 
   *       <dt>string `url_book`</dt>
   *       <dd>Direct book URL of this class.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_day`</dt>
   *   <dd>The day of week. One of {@link ADateWeekSid} constants.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_class_day = null;

  /**
   * An array listing the class sessions the staff member provides at each location.
   *
   * <dl>
   *   <dt>array[] `a_class_day`</dt>
   *   <dd>
   *     Contains a schedule of classes per day.
   *
   *     <dl>
   *       <dt>array `a_class_period`</dt>
   *       <dd>
   *         A list of sessions in the day:
   *         <dl>
   *           <dt>string `dt_time`</dt>
   *           <dd>The session start time in MySQL format.</dd>
   * 
   *           <dt>int `i_duration`</dt>
   *           <dd>The session duration in seconds.</dd>
   * 
   *           <dt>string `s_title`</dt>
   *           <dd>The class name.</dd>
   * 
   *           <dt>string `url_book`</dt>
   *           <dd>Direct book URL of this class.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_day`</dt>
   *       <dd>The day of week. One of {@link ADateWeekSid} constants.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_staff`</dt>
   *   <dd>
   *     Staff information.
   *
   *     <dl>
   *       <dt>string[] `a_location_work`</dt>
   *       <dd>A list of locations keys where staff works. 
   * 
   *       <dt>array `a_photo`</dt>
   *       <dd>
   *         Staff's photo. *         <dl>
   *           <dt>array `a_image`</dt>
   *           <dd>
   *             Image data. *             <dl>
   *               <dt>int `i_height`</dt>
   *               <dd>Actual height of thumbnail image.</dd>
   * 
   *               <dt>int `i_height_src`</dt>
   *               <dd>Height of original image.</dd>
   * 
   *               <dt>int `i_rotate`</dt>
   *               <dd>Angle on which image was rotated compared to the original.</dd>
   * 
   *               <dt>int `i_width`</dt>
   *               <dd>Actual width of thumbnail image.</dd>
   * 
   *               <dt>int `i_width_src`</dt>
   *               <dd>Width of original image.</dd>
   * 
   *               <dt>bool `is-resize`</dt>
   *               <dd>
   *                 Whether thumbnail is a resized variant of original image. If `false`, `url-thumbnail`
   * equals `url-view`.
   *               </dd>
   * 
   *               <dt>string `url-view`</dt>
   *               <dd>URL to original image in file storage.</dd>
   * 
   *               <dt>string `url-thumbnail`</dt>
   *               <dd>
   *                 URL to resized and rotated image in file storage. If the original is larger than
   * the specified dimensions, a thumbnail is created and its link is returned. Otherwise,
   * the link to the original image is returned here.
   *               </dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>int `i_height`</dt>
   *           <dd>Height of image.</dd>
   * 
   *           <dt>int `i_width`</dt>
   *           <dd>Width of image.</dd>
   * 
   *           <dt>int `id_gender`</dt>
   *
   * 
   *           <dt>bool `is_empty`</dt>
   *           <dd>Whether is empty.</dd>
   * 
   *           <dt>string `k_staff`</dt>
   *           <dd>Staff key.</dd>
   * 
   *           <dt>string `s_url`</dt>
   *           <dd>Path to image. 
   * 
   *           <dt>string `text_name`</dt>
   *           <dd>Staff name.</dd>
   * 
   *           <dt>string `uid`</dt>
   *           <dd>User key.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `html_biography`</dt>
   *       <dd>A description of the staff member. This description can include HTML tags.
   * Same as `s_biography` offset.</dd>
   * 
   *       <dt>string `html_first`</dt>
   *       <dd>The first name of the staff.</dd>
   * 
   *       <dt>string `html_last`</dt>
   *       <dd>The last name of the staff.</dd>
   * 
   *       <dt>string `html_location_title`</dt>
   *       <dd>Name of the current staff location.</dd>
   * 
   *       <dt>int `id_gender`</dt>
   *       <dd>The staff member's gender. One of the {@link AGenderSid} constants.</dd>
   * 
   *       <dt>bool `is_classes_events`</dt>
   *       <dd>`true` in case when staff provides classes/events in home location, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_publish_business_page`</dt>
   *       <dd>Whether staff member should be published on business pages.</dd>
   * 
   *       <dt>bool `is_schedule_enabled`</dt>
   *       <dd>`true` in case when for schedule exists for staff, `false` otherwise.</dd>
   * 
   *       <dt>string `k_location`</dt>
   *       <dd>Staff's current location. 
   * 
   *       <dt>string `k_staff`</dt>
   *       <dd>Staff key. eprecated</b>, use `uid_staff` instead.</dd>
   * 
   *       <dt>string `s_biography`</dt>
   *       <dd>
   *         A description of the staff member. This description can include HTML tags.
   * <b>Deprecated</b> use `html_biography` instead of this.
   *       </dd>
   * 
   *       <dt>string `s_family`</dt>
   *       <dd>
   *         The staff member surname. If there are rights, the full surname, if not, then depending on the business settings.
   *       </dd>
   * 
   *       <dt>string `s_name`</dt>
   *       <dd>
   *         The staff member first name. If there are rights, the full first name, if not, then depending on the business settings.
   *       </dd>
   * 
   *       <dt>string `s_position`</dt>
   *       <dd>The staff member position in the organization.</dd>
   * 
   *       <dt>string `text_business_role`</dt>
   *       <dd>Name of the staff role.</dd>
   * 
   *       <dt>string `text_full_name`</dt>
   *       <dd>Full name of the staff according to business settings.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>
   *         The user ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   * This is the ID number used to represent the staff member as a client.
   *       </dd>
   * 
   *       <dt>string `uid_staff`</dt>
   *       <dd>The staff user ID. 
   * 
   *       <dt>string `url_schedule`</dt>
   *       <dd>URL to the schedule with this staff.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_result_list = null;

  /**
   * An array containing information about the staff member.
   *
   * <dl>
   *   <dt>string[] `a_location_work`</dt>
   *   <dd>A list of locations keys where staff works. 
   * 
   *   <dt>array `a_photo`</dt>
   *   <dd>
   *     Staff's photo. *     <dl>
   *       <dt>array `a_image`</dt>
   *       <dd>
   *         Image data. *         <dl>
   *           <dt>int `i_height`</dt>
   *           <dd>Actual height of thumbnail image.</dd>
   * 
   *           <dt>int `i_height_src`</dt>
   *           <dd>Height of original image.</dd>
   * 
   *           <dt>int `i_rotate`</dt>
   *           <dd>Angle on which image was rotated compared to the original.</dd>
   * 
   *           <dt>int `i_width`</dt>
   *           <dd>Actual width of thumbnail image.</dd>
   * 
   *           <dt>int `i_width_src`</dt>
   *           <dd>Width of original image.</dd>
   * 
   *           <dt>bool `is-resize`</dt>
   *           <dd>
   *             Whether thumbnail is a resized variant of original image. If `false`, `url-thumbnail`
   * equals `url-view`.
   *           </dd>
   * 
   *           <dt>string `url-view`</dt>
   *           <dd>URL to original image in file storage.</dd>
   * 
   *           <dt>string `url-thumbnail`</dt>
   *           <dd>
   *             URL to resized and rotated image in file storage. If the original is larger than
   * the specified dimensions, a thumbnail is created and its link is returned. Otherwise,
   * the link to the original image is returned here.
   *           </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_height`</dt>
   *       <dd>Height of image.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Width of image.</dd>
   * 
   *       <dt>int `id_gender`</dt>
   *
   * 
   *       <dt>bool `is_empty`</dt>
   *       <dd>Whether is empty.</dd>
   * 
   *       <dt>string `k_staff`</dt>
   *       <dd>Staff key.</dd>
   * 
   *       <dt>string `s_url`</dt>
   *       <dd>Path to image. 
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>Staff name.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>User key.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_biography`</dt>
   *   <dd>A description of the staff member. This description can include HTML tags.
   * Same as `s_biography` offset.</dd>
   * 
   *   <dt>string `html_first`</dt>
   *   <dd>The first name of the staff.</dd>
   * 
   *   <dt>string `html_last`</dt>
   *   <dd>The last name of the staff.</dd>
   * 
   *   <dt>string `html_location_title`</dt>
   *   <dd>Name of the current staff location.</dd>
   * 
   *   <dt>int `id_gender`</dt>
   *   <dd>The staff member's gender. One of the {@link AGenderSid} constants.</dd>
   * 
   *   <dt>bool `is_classes_events`</dt>
   *   <dd>`true` in case when staff provides classes/events in home location, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_publish_business_page`</dt>
   *   <dd>Whether staff member should be published on business pages.</dd>
   * 
   *   <dt>bool `is_schedule_enabled`</dt>
   *   <dd>`true` in case when for schedule exists for staff, `false` otherwise.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Staff's current location. 
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>Staff key. eprecated</b>, use `uid_staff` instead.</dd>
   * 
   *   <dt>string `s_biography`</dt>
   *   <dd>
   *     A description of the staff member. This description can include HTML tags.
   * <b>Deprecated</b> use `html_biography` instead of this.
   *   </dd>
   * 
   *   <dt>string `s_family`</dt>
   *   <dd>
   *     The staff member surname. If there are rights, the full surname, if not, then depending on the business settings.
   *   </dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>
   *     The staff member first name. If there are rights, the full first name, if not, then depending on the business settings.
   *   </dd>
   * 
   *   <dt>string `s_position`</dt>
   *   <dd>The staff member position in the organization.</dd>
   * 
   *   <dt>string `text_business_role`</dt>
   *   <dd>Name of the staff role.</dd>
   * 
   *   <dt>string `text_full_name`</dt>
   *   <dd>Full name of the staff according to business settings.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>
   *     The user ID. Each staff member in WellnessLiving can also access the system as a client of their business.
   * This is the ID number used to represent the staff member as a client.
   *   </dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>The staff user ID. 
   * 
   *   <dt>string `url_schedule`</dt>
   *   <dd>URL to the schedule with this staff.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_staff;

  /**
   * A list of staff user IDs.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid_staff_list = null;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The staff member user ID.
   * A staff member can work for more than one business.
   *
   * @get get
   * @var string
   */
  public $uid_staff = '0';
}

?>