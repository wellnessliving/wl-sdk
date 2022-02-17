<?php

namespace WellnessLiving\Wl\Promotion\Index;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlProgramTypeSid;

/**
 * Point to get packages/passes/memberships available in a certain location.
 */
class PromotionIndexModel extends WlModelAbstract
{
  /**
   * Item list. Every element has keys:
   * <dl>
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
   *     See all possible options here: {@link ADurationSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_duration_type</var>
   *   </dt>
   *   <dd>
   *     Type of the duration. Can be "Without End", 'Expires on a certain date', 'Period'.
   *     See more information here: {@link \WellnessLiving\WlDurationTypeSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program</var>
   *   </dt>
   *   <dd>
   *     Type of the purchase options.
   *     See more information here: {@link \WellnessLiving\WlProgramSid}.
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
   *     Primary key of the purchase option.
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
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]|null
   */
  public $a_promotion = null;

  /**
   * Program type to get items of.
   * One of {@link WlProgramTypeSid} constants.
   *
   * `0` to not filter purchase options with type of the purchase option.
   *
   * @get get
   * @var int
   */
  public $id_program_type = 0;

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>