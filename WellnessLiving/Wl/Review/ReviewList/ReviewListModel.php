<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of review IDs for all reviews for a location. If location is not specified, returns
 * all reviews for all locations in the specified business.
 *
 * Reviews in WellnessLiving apply to specific locations. This endpoint can be used to get the IDs for all reviews or
 * to get a listing that includes all the review data if the `i_page parameter` is set.
 */
class ReviewListModel extends WlModelAbstract
{
  /**
   * List of reviews. If passed {@link ReviewListModel::$i_page} then the result will be full, otherwise in result will be keys: <tt>k_review</tt>, <tt>uid</tt>.
   * <dl>
   *   <dt>
   *     bool <var>can_reply</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if can reply to review, <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>dl_reply</var>
   *   </dt>
   *   <dd>
   *     Date when staff reply to review. Can be empty string if no one replied.
   *   </dd>
   *   <dt>
   *     string <var>dt_add</var>
   *   </dt>
   *   <dd>
   *     Date when review added.
   *   </dd>
   *   <dt>
   *     float <var>f_rate</var>
   *   </dt>
   *   <dd>
   *     Rate of review.
   *   </dd>
   *   <dt>
   *     bool <var>is_featured</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if review is featured, <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_verify</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if review is verify, <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>k_review</var>
   *   </dt>
   *   <dd>
   *     Review key.
   *   </dd>
   *   <dt>
   *     string <var>s_firstname</var>
   *   </dt>
   *   <dd>
   *     First name of user who wrote review.
   *   </dd>
   *   <dt>
   *     string <var>s_lastname</var>
   *   </dt>
   *   <dd>
   *     Last name of user who wrote review.
   *   </dd>
   *   <dt>
   *     string <var>s_reply</var>
   *   </dt>
   *   <dd>
   *     Reply for review.
   *   </dd>
   *   <dt>
   *     string <var>s_text</var>
   *   </dt>
   *   <dd>
   *     Review text.
   *   </dd>
   *   <dt>
   *     string <var>text_city</var>
   *   </dt>
   *   <dd>
   *     City from the profile of the user, who left review.
   *   </dd>
   *   <dt>
   *     string <var>text_reply_first</var>
   *   </dt>
   *   <dd>
   *     First name of staff who replied of review. Can be empty string if no one replied.
   *   </dd>
   *   <dt>
   *     string <var>text_reply_last</var>
   *   </dt>
   *   <dd>
   *     Last name of staff who replied of review. Can be empty string if no one replied.
   *   </dd>
   *   <dt>
   *     string <var>text_role</var>
   *   </dt>
   *   <dd>
   *     Staff role who replied of review. Can be empty string if no one replied.
   *   </dd>
   *   <dt>
   *     string <var>uid</var>
   *   </dt>
   *   <dd>
   *     User key who wrote review.
   *   </dd>
   *   <dt>
   *     string <var>url_image</var>
   *   </dt>
   *   <dd>
   *     Link to the image of the user who wrote review.
   *   </dd>
   *   <dt>
   *     string <var>url_reply_image</var>
   *   </dt>
   *   <dd>
   *     Link to the image of the user who replied of review. Can be empty string if no one replied.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_review;

  /**
   * If not specified, this request will return all review keys. If specified, this request will return detailed reviews
   * (10 per page).
   *
   * This will be `null` if you only need to load the keys of the review.
   *
   * @get get
   * @var int|null
   */
  public $i_page = null;

  /**
   * The order in which the review should be arranged. One of the {@link ReviewOrderSid} constants.
   *
   * If not passed use default order {@link ReviewOrderSid::LATEST}.
   *
   * @get get
   * @var int|null
   */
  public $id_order = null;

  /**
   * Business key. If not specified, location key needs to be specified.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the location to show reviews for. If not specified, business key should be specified.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * The user's key. WellnessLiving allows staff to check low-rated reviews before posting them. Staff members can see
   * all reviews. Clients can only see checked reviews.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>