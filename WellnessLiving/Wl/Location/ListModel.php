<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlProjectSid;

/**
 * Returns information for all locations belonging to a business.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of business keys.
   *
   * You can specify this instead of <var>$k_business</var> to load data for many businesses in one call.
   *
   * @get get
   * @var string[]
   */
  public $a_business = [];

  /**
   * Information about the business's location(s). If you've specified multiple businesses for this endpoint, this will
   * return location information for multiple businesses. Keys refer to location keys. Values refer to nested arrays with the next keys:
   * <dl>
   *   <dt>
   *     int <var>a_directories</var>
   *   </dt>
   *   <dd>
   *     List of directories from {@link WlProjectSid}, where location is published.
   *   </dd>
   *   <dt>
   *     array <var>a_timezone</var>
   *   </dt>
   *   <dd>
   *     Information about location timezone. Includes `k_timezone` for primary key, `text_abbr` for user-friendly short
   *     abbreviation and `text_name` for the name of the timezone.
   *   </dd>
   *   <dt>
   *     float <var>f_latitude</var>
   *   </dt>
   *   <dd>
   *     The location latitude.
   *   </dd>
   *   <dt>
   *     float <var>f_longitude</var>
   *   </dt>
   *   <dd>
   *     The location longitude.
   *   </dd>
   *   <dt>
   *     int <var>i_shift</var>
   *   </dt>
   *   <dd>
   *     Timezone shift in hours.
   *   </dd>
   *   <dt>
   *     string <var>k_business</var>
   *   </dt>
   *   <dd>
   *     The business key.
   *   </dd>
   *   <dt>
   *     string <var>k_country</var>
   *   </dt>
   *   <dd>
   *     Country key.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     The location key.
   *   </dd>
   *   <dt>
   *     string <var>k_region</var>
   *   </dt>
   *   <dd>
   *     Region key.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The location title.
   *   </dd>
   *   <dt>
   *     string <var>text_address</var>
   *   </dt>
   *   <dd>
   *     The location's full address.
   *   </dd>
   *   <dt>
   *     string [<var>url_logo</var>]
   *   </dt>
   *   <dd>
   *     The location logo's URL. This will only be set if the location has a logo and contains small thumbnail of the image.
   *   </dd>
   *   <dt>
   *     string [<var>url_logo_source</var>]
   *   </dt>
   *   <dd>
   *     The location logo's URL. This will only be set if the location has a logo and contains full uploaded image.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_location;

  /**
   * The business key used internally by WellnessLiving.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The primary keys of the selected businesses.
   * You can specify this instead of <var>$k_business</var> to load data for many businesses in one call.
   *
   * This is the same as <var>$a_business</var>, but serialized with JSON (to make the URL shorter).
   *
   * @get get
   * @var string
   */
  public $s_business = '';

  /**
   * Determines whether removed locations should be returned.
   *
   * @get get
   * @var bool
   */
  public $show_remove = false;
}

?>