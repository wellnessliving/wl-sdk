<?php

namespace WellnessLiving\Wl\Review\ReviewList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlReviewStatusSid;

/**
 * Returns information about a review.
 */
class ReviewElementModel extends WlModelAbstract
{
  /**
   * Review data:
   *
   * @get result
   * @var array
   */
<dl>
  <dt>string `dt_add`</dt>
  <dd>Date when review was added by user.</dd>

  <dt>float `f_rate`</dt>
  <dd>Review rate.</dd>

  <dt>int `id_review_status`</dt>
  <dd>Status of the Review. One of {@link WlReviewStatusSid} constants.</dd>

  <dt>bool `is_featured`</dt>
  <dd>If `true`, the review is featured. Otherwise, this will be `false`.</dd>

  <dt>bool `is_verify`</dt>
  <dd><tt>true</tt> if review is verified, <tt>false</tt> otherwise.</dd>

  <dt>string `text_firstname`</dt>
  <dd>Client's first name who added review.</dd>

  <dt>string `text_lastname`</dt>
  <dd>Client's last name who added review.</dd>

  <dt>string `text_reply`</dt>
  <dd>Staff reply. Can be empty.</dd>

  <dt>string `text_review`</dt>
  <dd>Review text.</dd>

  <dt>string `text_business_name`</dt>
  <dd>Business name</dd>

  <dt>string `text_response`</dt>
  <dd>Word "response".</dd>

  <dt>string `uid`</dt>
  <dd>User key.</dd>

  <dt>string `url_logo`</dt>
  <dd>User logo.</dd>
</dl>
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
   * May be empty in the case of a guest.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>