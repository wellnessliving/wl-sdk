<?php

namespace WellnessLiving\Wl\Gym\Visit;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint for adding a gym visit.
 */
class VisitAddModel extends WlModelAbstract
{
  /**
   * The time of the visit, in the location's timezone. An array with the following fields:
   * <dl>
   *   <dt>int <var>i_hour</var></dt>
   *   <dd>The hour component.</dd>
   *   <dt>int <var>i_minute</var></dt>
   *   <dd>The minute component.</dd>
   *   <dt>bool <var>is_am</var></dt>
   *   <dd>If `true` the visit is in the AM. If `false` it is in the PM.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_time = [];

  /**
   * The date of visit, without a time component in MySQL format. Date is based on the timezone of the location.
   *
   * @post post
   * @var string
   */
  public $dt_date;

  /**
   * Determines whether payment is required for the visit.
   *
   * `true` if payment is needed for the visit.
   * `false` if visit should be not pay.
   *
   * @post post
   * @var bool
   */
  public $is_pay;

  /**
   * The business key.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * The location key.
   *
   * @post get
   * @var string
   */
  public $k_location;

  /**
   * The key of the user making the gym visit.
   *
   * @post get
   * @var string
   */
  public $uid;

  /**
   * Url to the business catalog with items that can be used to pay for the visit.
   *
   * @post result
   * @var string
   */
  public $url_catalog;
}

?>