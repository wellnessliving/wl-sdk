<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information about a review.
 */
class ReviewElementModel extends WlModelAbstract
{
  /**
   * Review data:
   * <dl>
   *   <dt>
   *     string <var>dt_add</var>
   *   </dt>
   *   <dd>
   *     Date when review was added by user.
   *   </dd>
   *   <dt>
   *     float <var>f_rate</var>
   *   </dt>
   *   <dd>
   *     Review rate.
   *   </dd>
   *   <dt>
   *     int <var>id_review_status</var>
   *   </dt>
   *   <dd>
   *     Status of the Review
   *   </dd>
   *   <dt>
   *     bool <var>is_verify</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if review is verified, <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>text_firstname</var>
   *   </dt>
   *   <dd>
   *     Client's first name who added review.
   *   </dd>
   *   <dt>
   *     string <var>text_lastname</var>
   *   </dt>
   *   <dd>
   *     Client's last name who added review.
   *   </dd>
   *   <dt>
   *     string <var>text_reply</var>
   *   </dt>
   *   <dd>
   *     Staff reply. Can be empty.
   *   </dd>
   *   <dt>
   *     string <var>text_review</var>
   *   </dt>
   *   <dd>
   *     Review text.
   *   </dd>
   *   <dt>
   *     string <var>text_business_name</var>
   *   </dt>
   *   <dd>
   *     Business name
   *   </dd>
   *   <dt>
   *     string <var>text_response</var>
   *   </dt>
   *   <dd>
   *     Word "response".
   *   </dd>
   *   <dt>
   *     string <var>uid</var>
   *   </dt>
   *   <dd>
   *     User key.
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
  public $a_review = [];

  /**
   * The key of the business to which the review belongs.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The review key.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $k_review = '0';

  /**
   * The user key.
   *
   * May be empty in the case of a quest.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>