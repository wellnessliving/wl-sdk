<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about review item.
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
   *     Client's first name who added review.
   *   </dd>
   *   <dt>
   *     string <var>s_lastname</var>
   *   </dt>
   *   <dd>
   *     Client's last name who added review.
   *   </dd>
   *   <dt>
   *     string <var>s_reply</var>
   *   </dt>
   *   <dd>
   *     Staff reply. Can be empty.
   *   </dd>
   *   <dt>
   *     string <var>s_text</var>
   *   </dt>
   *   <dd>
   *     Review text.
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
  public $a_review;

  /**
   * Key of the business to which the review belongs.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Review primary key in {@link \RsReviewSql}.
   *
   * @get get
   * @var string
   */
  public $k_review = '0';

  /**
   * User primary key in {@link \PassportLoginSql}.
   *
   * May be empty for a case of quest.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>