<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information about a review.
 */
class ReviewElementModel extends WlModelAbstract
{
  /**
   * An array containing information about the review with the following fields:
   * <dl>
   *   <dt>
   *     string <var>dt_add</var>
   *   </dt>
   *   <dd>
   *     The date the review was added.
   *   </dd>
   *   <dt>
   *     float <var>f_rate</var>
   *   </dt>
   *   <dd>
   *     The review rating (1-5 stars).
   *   </dd>
   *   <dt>
   *     bool <var>is_verify</var>
   *   </dt>
   *   <dd>
   *     If `true`, the review is verified. Otherwise, this will be `false`.
   *   </dd>
   *   <dd>
   *     The review rate.
   *   </dd>
   *   <dt>
   *     string <var>s_firstname</var>
   *   </dt>
   *   <dd>
   *     The first name of the user leaving the review.
   *   </dd>
   *   <dt>
   *     string <var>s_lastname</var>
   *   </dt>
   *   <dd>
   *     The surname of the user leaving the review.
   *   </dd>
   *   <dt>
   *     string <var>s_reply</var>
   *   </dt>
   *   <dd>
   *     The staff members of the business who have the option to reply to reviews. This is the text of the reply. If there
   *     is no reply, then this will be an empty string.
   *   </dd>
   *   <dt>
   *     string <var>s_text</var>
   *   </dt>
   *   <dd>
   *     The text of the review.
   *   </dd>
   *   <dt>
   *     string <var>uid</var>
   *   </dt>
   *   <dd>
   *     The user ID of the user leaving the review.
   *   </dd>
   *   <dt>
   *     string <var>url_logo</var>
   *   </dt>
   *   <dd>
   *     The user logo.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_review;

  /**
   * The key of the business to which the review belongs.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The review key.
   *
   * @get get
   * @var string
   */
  public $k_review = '0';

  /**
   * The user key.
   *
   * May be empty in the case of a request.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>