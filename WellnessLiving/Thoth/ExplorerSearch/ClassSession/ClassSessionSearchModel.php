<?php

namespace WellnessLiving\Thoth\ExplorerSearch\ClassSession;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlHomeTourSid;

/**
 * Handles searching of class sessions.
 */
class ClassSessionSearchModel extends WlModelAbstract
{
  /**
   * List of business keys to search by.
   *
   * Empty array to not filter by business keys.
   *
   * @get get
   * @var string[]
   */
  public $a_business = [];

  /**
   * List of found class sessions.
   *
   * Each item is an associative array with the following structure: 
   *
   * @get result
   * @var array
   */
<dl>
  <dt>string|null `dtu_book_begin`</dt>
  <dd>Date and time when booking for this session starts in UTC. `null` if there is no "too early" limitation.</dd>

  <dt>string|null `dtu_book_end`</dt>
  <dd>Date and time when booking for this session ends in UTC. `null` if there is no "too late" limitation.</dd>

  <dt>string `dtu_session`</dt>
  <dd>Date and time of the session in UTC.</dd>

  <dt>string `k_class`</dt>


  <dt>string `k_class_period`</dt>


  <dt>string `k_class_period_session`</dt>

</dl>
  public $a_class_session;

  /**
   * List of experience types to search by.
   *
   * Empty array to not filter by experience type.
   *
   * @get get
   * @var int[]
   */
  public $a_experience_type = [];

  /**
   * List of home tour activity types to search by. Each value is from {@link WlHomeTourSid}.
   *
   * Empty array to not filter by home tour type.
   *
   * @get get
   * @var int[]
   */
  public $a_home_tour = [];

  /**
   * List of location keys to search by.
   *
   * Empty array to not filter by location keys.
   *
   * @get get
   * @var string[]
   */
  public $a_location = [];

  /**
   * List of location ratings to search by. Values are integers from 1 to 5, or `null`/`0` for unrated locations.
   *
   * Empty array to not filter by location rating.
   *
   * @get get
   * @var int[]|null[]
   */
  public $a_location_rating = [];

  /**
   * List of staff user keys to search by. Each value is a user key (uid) of a staff member.
   *
   * Empty array to not filter by staff.
   *
   * @get get
   * @var string[]
   */
  public $a_staff_uid = [];

  /**
   * Start date of the session search date range in MySQL format (`Y-m-d`). Required.
   *
   * `null` if not set by request.
   *
   * @get get
   * @var string|null
   */
  public $dl_begin = null;

  /**
   * End date of the session search date range in MySQL format (`Y-m-d`). Required.
   *
   * `null` if not set by request.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Latitude coordinate for search. Required.
   *
   * `null` if not set by request.
   *
   * @get get
   * @var float|null
   */
  public $f_latitude = null;

  /**
   * Longitude coordinate for search. Required.
   *
   * `null` if not set by request.
   *
   * @get get
   * @var float|null
   */
  public $f_longitude = null;

  /**
   * Search radius in kilometers. Required.
   *
   * `null` if not set by request.
   *
   * @get get
   * @var float|null
   */
  public $f_radius = null;

  /**
   * Maximum price to search by (inclusive). Decimal string in dollars (e.g. `"100.00"`).
   *
   * `null` to not limit by maximum price.
   *
   * @get get
   * @var string|null
   */
  public $m_price_max = null;

  /**
   * Minimum price to search by (inclusive). Decimal string in dollars (e.g. `"0.00"`).
   *
   * `null` to not limit by minimum price.
   *
   * @get get
   * @var string|null
   */
  public $m_price_min = null;
}

?>