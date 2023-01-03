<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Endpoint returns a list of review IDs for all reviews for a location.
 *
 * Reviews in WellnessLiving apply to specific locations. Endpoint can be used to get the IDs for all reviews or can be
 * used to get a listing that includes all the review data if the `i_page parameter` is set.
 */
class ReviewListModel extends WlModelAbstract
{
  /**
   * <dl>
   *   <dt>array[] <var>a_review</var></dt>
   *   <dd>The list of reviews. If passed {@link ReviewListModel::$i_page} then the result will be full,
   *     otherwise in result will be keys: <tt>k_review</tt>, <tt>uid</tt>.
   *
   *     <dl>
   *       <dt>bool <var>can_reply</var></dt>
   *       <dd>This is `true` if you can reply to review, `false` otherwise.</dd>
   *
   *       <dt>string <var>dl_reply</var></dt>
   *       <dd>The date when the staff member replied to this review. It will be empty if there is no reply.</dd>
   *
   *       <dt>string <var>dt_add</var></dt>
   *       <dd>The date when the review was added.</dd>
   *
   *       <dt>float <var>f_rate</var></dt>
   *       <dd>The rating given in the review. WellnessLiving gives a rating out of 5 stars.</dd>
   *
   *       <dt>bool <var>is_verify</var></dt>
   *       <dd>This will be `true` if the review has been verified by a staff member of the business.
   *         It will be `false` if the review is unverified.</dd>
   *
   *       <dt>string <var>k_review</var></dt>
   *       <dd>The review key.</dd>
   *
   *       <dt>string <var>s_firstname</var></dt>
   *       <dd>The first name of the user who wrote the review.</dd>
   *
   *       <dt>string <var>s_lastname</var></dt>
   *       <dd>The last name of the user who wrote the review.</dd>
   *
   *       <dt>string <var>s_reply</var></dt>
   *       <dd>The text of the reply to the review.</dd>
   *
   *       <dt>string <var>s_text</var></dt>
   *       <dd>The text of the review.</dd>
   *
   *       <dt>string <var>text_city</var></dt>
   *       <dd>City from the profile of the user, who left review.</dd>
   *
   *       <dt>string <var>text_reply_first</var></dt>
   *       <dd>The first name of the staff member who replied to this review. It will be empty if there is no reply.</dd>
   *
   *       <dt>string <var>text_reply_last</var></dt>
   *       <dd>The last name of the staff member who replied to this review. It will be empty if there is no reply.</dd>
   *
   *       <dt>string <var>text_role</var></dt>
   *       <dd>The role of the staff member who replied to the review. It will be empty if there is no reply.</dd>
   *
   *       <dt>string <var>uid</var></dt>
   *       <dd>The key of the user who wrote the review.</dd>
   *
   *       <dt>string <var>url_image</var></dt>
   *       <dd>The link to the image of the user who wrote the review.</dd>
   *
   *       <dt>string <var>url_reply_image</var></dt>
   *       <dd>The link to the image of the user who replied to the review. This will be empty if there is no reply.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array|null
   */
  public $a_review = [];

  /**
   * If not specified this request will return all review IDs. If specified, this request will return detailed reviews
   * (10 per page).
   *
   * It is `null` if need load only keys of review.
   *
   * @get get
   * @var int
   */
  public $i_page = null;

  /**
   * The order in which the review should be arranged. One of {@link ReviewOrderSid} constants.
   *
   * It is `null` if not passed and use default order.
   *
   * @get get
   * @var int|null
   */
  public $id_order = null;

  /**
   * The key of the location to show reviews for.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The user's key. WellnessLiving allows staff to check low-rated reviews before posting them. Staff members can see
   * all reviews. Clients can only see checked reviews.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>