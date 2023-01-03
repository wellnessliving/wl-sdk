<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about a review.
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
   *     <tt>true</tt> if review is verified, <tt>false</tt> otherwise.
   *   </dd>
   *   <dd>
   *     Review rate.
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
   *     The staff members of the business have the option to reply to reviews. This is the text of the reply; if there
   *     is no reply, then this willl be an empty string.
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
   *     User logo.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_review;

  /**
   * Key of the business to which the review belongs.
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
   * May be empty for a case of quest.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>