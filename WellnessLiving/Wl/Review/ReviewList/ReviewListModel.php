<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of review IDs for all reviews for a location. If location is not specified, returns
 * all reviews for all locations in the specified business.
 *
 * Reviews in WellnessLiving apply to specific locations. This endpoint can be used to get the IDs for all reviews or
 * to get a listing that includes all the review data if the `i_page parameter` is set.
 */
class ReviewListModel extends WlModelAbstract
{
  /**
   * List of reviews. If passed {@link ReviewListModel::$i_page} then the result will be full, otherwise in result will be keys: <tt>k_review</tt>, <tt>uid</tt>.
   *
   * <dl>
   *   <dt>bool `can_reply`</dt>
   *   <dd><tt>true</tt> if can reply to review, <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>string `dl_reply`</dt>
   *   <dd>Date when staff reply to review. Can be empty string if no one replied.</dd>
   * 
   *   <dt>string `dt_add`</dt>
   *   <dd>Date when review added.</dd>
   * 
   *   <dt>float `f_rate`</dt>
   *   <dd>Rate of review.</dd>
   * 
   *   <dt>bool `is_featured`</dt>
   *   <dd><tt>true</tt> if review is featured, <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>bool `is_verify`</dt>
   *   <dd><tt>true</tt> if review is verify, <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>The location key for where the review was left/assigned. </dd>
   * 
   *   <dt>string `k_review`</dt>
   *   <dd>Review key. </dd>
   * 
   *   <dt>string `s_firstname`</dt>
   *   <dd>First name of user who wrote review.</dd>
   * 
   *   <dt>string `s_lastname`</dt>
   *   <dd>Last name of user who wrote review.</dd>
   * 
   *   <dt>string `s_reply`</dt>
   *   <dd>Reply for review.</dd>
   * 
   *   <dt>string `s_text`</dt>
   *   <dd>Review text.</dd>
   * 
   *   <dt>string `text_city`</dt>
   *   <dd>City from the profile of the user, who left review.</dd>
   * 
   *   <dt>string `text_reply_first`</dt>
   *   <dd>First name of staff who replied of review. Can be empty string if no one replied.</dd>
   * 
   *   <dt>string `text_reply_last`</dt>
   *   <dd>Last name of staff who replied of review. Can be empty string if no one replied.</dd>
   * 
   *   <dt>string `text_role`</dt>
   *   <dd>Staff role who replied of review. Can be empty string if no one replied.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key who wrote review.</dd>
   * 
   *   <dt>string `url_image`</dt>
   *   <dd>Link to the image of the user who wrote review.</dd>
   * 
   *   <dt>string `url_reply_image`</dt>
   *   <dd>Link to the image of the user who replied of review. Can be empty string if no one replied.</dd>
   * </dl>
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