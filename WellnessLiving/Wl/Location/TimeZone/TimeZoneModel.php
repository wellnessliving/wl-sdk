<?php

namespace WellnessLiving\Wl\Location\TimeZone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves time zone information.
 *
 * @method WlModelRequest get() Gets timezone of passed coordinates.
 * @method WlModelRequest post() Contact Google Maps API to get the timezone for a given location.
 */
class TimeZoneModel extends WlModelAbstract
{
  /**
   * Time zone information.
   * Relevant parts of the geo code request result: 
   *
   * <tt>null</tt> if no result.
   *
   * <dl>
   *   <dt>int|null `i_dst_offset`</dt>
   *   <dd>
   *     Maximum daylight savings offset in seconds. A value of 3600 indicates this location uses daylight savings time, <tt>null</tt> if no dst info requested.
   *   </dd>
   * 
   *   <dt>int `i_raw_offset`</dt>
   *   <dd>The timezone's offset in seconds from UTC. Not all time zones will be evenly divisible by 3600.</dd>
   * 
   *   <dt>string `text_time_zone_id`</dt>
   *   <dd>The time zone's ID in IANA.</dd>
   * 
   *   <dt>string `text_time_zone_name`</dt>
   *   <dd>The time zone's name.</dd>
   * 
   *   <dt>string `text_time_zone_name_google`</dt>
   *   <dd>The time zone's name in result of Google API.</dd>
   * </dl>
   * @post result
   * @var array|null
   */
  public $a_timezone = null;

  /**
   * Latitude of the location.
   *
   * @get get
   * @var float
   */
  public $f_latitude = 0;

  /**
   * Longitude of the location.
   *
   * @get get
   * @var float
   */
  public $f_longitude = 0;

  /**
   * `true` if user can skip the check and save not recommended timezone.
   * `false` - otherwise.
   *
   * @post result
   * @var bool
   */
  public $is_admin = false;

  /**
   * @get result
   * @var string
   */
  public $k_timezone = '';

  /**
   * Location's address.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $text_location = null;

  /**
   * The timezone identifier according to the ION standard, which was determined through the Google API.
   *
   * @get result
   * @var string
   */
  public $text_time_zone_google_id = '';

  /**
   * The system timezone name.
   *
   * @get result
   * @var string
   */
  public $text_time_zone_name = '';
}

?>