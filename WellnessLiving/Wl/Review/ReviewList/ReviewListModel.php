<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of reviews.
 */
class ReviewListModel extends WlModelAbstract
{
  /**
   * <dl>
   *   <dt>array[] <var>a_review</var></dt>
   *   <dd>List of reviews. If passed {@link ReviewListModel::$i_page} then the result will be full,
   *     otherwise in result will be keys: <tt>k_review</tt>, <tt>uid</tt>.
   *
   *     <dl>
   *       <dt>bool <var>can_reply</var></dt>
   *       <dd><tt>true</tt> if can reply to review, <tt>false</tt> otherwise.</dd>
   *
   *       <dt>string <var>dl_reply</var></dt>
   *       <dd>Date when staff reply to review. Can be empty string if no one replied.</dd>
   *
   *       <dt>string <var>dt_add</var></dt>
   *       <dd>Date when review added.</dd>
   *
   *       <dt>float <var>f_rate</var></dt>
   *       <dd>Rate of review.</dd>
   *
   *       <dt>bool <var>is_verify</var></dt>
   *       <dd><tt>true</tt> if review is verify, <tt>false</tt> otherwise.</dd>
   *
   *       <dt>string <var>k_review</var></dt>
   *       <dd>Review key.</dd>
   *
   *       <dt>string <var>s_firstname</var></dt>
   *       <dd>First name of user who wrote review.</dd>
   *
   *       <dt>string <var>s_lastname</var></dt>
   *       <dd>Last name of user who wrote review.</dd>
   *
   *       <dt>string <var>s_reply</var></dt>
   *       <dd>Reply for review.</dd>
   *
   *       <dt>string <var>s_text</var></dt>
   *       <dd>Review text.</dd>
   *
   *       <dt>string <var>text_city</var></dt>
   *       <dd>City from the profile of the user, who left review.</dd>
   *
   *       <dt>string <var>text_reply_first</var></dt>
   *       <dd>First name of staff who replied of review. Can be empty string if no one replied.</dd>
   *
   *       <dt>string <var>text_reply_last</var></dt>
   *       <dd>Last name of staff who replied of review. Can be empty string if no one replied.</dd>
   *
   *       <dt>string <var>text_role</var></dt>
   *       <dd>Staff role who replied of review. Can be empty string if no one replied.</dd>
   *
   *       <dt>string <var>uid</var></dt>
   *       <dd>User key who wrote review.</dd>
   *
   *       <dt>string <var>url_image</var></dt>
   *       <dd>Link to the image of the user who wrote review.</dd>
   *
   *       <dt>string <var>url_reply_image</var></dt>
   *       <dd>Link to the image of the user who replied of review. Can be empty string if no one replied.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array|null
   */
  public $a_review = [];

  /**
   * Page number.
   * <tt>null</tt> if need load only keys of review.
   *
   * @get get
   * @var int
   */
  public $i_page = null;

  /**
   * Review order ID. One of {@link ReviewOrderSid} constants.
   * <tt>null</tt> if not passed and use default order.
   *
   * @get get
   * @var int|null
   */
  public $id_order = null;

  /**
   * Location ID to show reviews for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>