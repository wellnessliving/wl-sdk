<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * Returns a list of either previous or upcoming visits for a specific user.
 *
 * A visit can be for an appointment, class, or an event.
 *
 * @method WlModelRequest get() Retrieves items of schedule for the client.  Returns the client's upcoming or past visits for a given business, ordered by date. Supports optional date range boundaries to retrieve visits within a specific window. Used to populate the schedule history and upcoming bookings pages in the client portal.
 */
class PageListModel extends WlModelAbstract
{
  /**
   * Elements of user's schedule. Every element has next keys:
   *
   * <dl>
   *   <dt>string `dtu_date`</dt>
   *   <dd>Date and time of the visit in UTC.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business in which this visit was made.
   * </dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>Key of a book/visit. </dd>
   * 
   *   <dt>int `id_visit`</dt>
   *   <dd>Visit status ID. One of {@link WlVisitSid} constants.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_visit = [];

  /**
   * If the date is set, a list of services before this date will be returned.
   * The date and time is in UTC and in MySQL format.
   * If left as `null`, then a list of services that aren't limited to the end date will be returned.
   *
   * @get get
   * @var string|null
   */
  public $dtu_end = null;

  /**
   * If the date is set, a list of services after this date will be returned.
   * The date and time is in UTC and in MySQL format.
   * If left as `null`, then a list of services that aren't limited to the start date will be returned.
   *
   * @get get
   * @var string|null
   */
  public $dtu_start = null;

  /**
   * If `true`, then all the client previous visits will be retrieved.
   * If `false` or left as `null`, then all the client upcoming visits will be retrieved.
   *
   * @get get
   * @var bool
   */
  public $is_past = false;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The user key.
   *
   * @get get
   * @var string|null
   */
  public $uid = '0';
}

?>