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
   * You can specify this instead of {@link ListModel::$k_business} to load data for many businesses in one call.
   *
   * @get get
   * @var string[]
   */
  public $a_business = [];

  /**
   * Information about the business's location(s). If you've specified multiple businesses for this endpoint, this will
   * return location information for multiple businesses. Keys refer to location keys. Values refer to nested arrays with the next keys:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>int `a_directories`</dt>
  <dd>List of directories from {@link WlProjectSid}, where location is published.</dd>

  <dt>array `a_timezone`</dt>
  <dd>
    Information about location timezone: <dl>
  <dt>string `k_timezone`</dt>
  <dd>Timezone key. 
  <dt>string `text_abbr`</dt>
  <dd>User-friendly short timezone abbreviation, for example 'EST' or 'PST'.</dd>
  <dt>string `text_name`</dt>
  <dd>Full timezone name, for example 'America/New_York'.</dd>
</dl> <dl>
      <dt>string `k_timezone`</dt>
      <dd>Timezone key. 

      <dt>string `text_abbr`</dt>
      <dd>User-friendly short timezone abbreviation, for example 'EST' or 'PST'.</dd>

      <dt>string `text_name`</dt>
      <dd>Full timezone name, for example 'America/New_York'.</dd>
    </dl>
  </dd>

  <dt>float `f_latitude`</dt>
  <dd>The location latitude.</dd>

  <dt>float `f_longitude`</dt>
  <dd>The location longitude.</dd>

  <dt>int `i_shift`</dt>
  <dd>Timezone shift in hours.</dd>

  <dt>string `k_business`</dt>
  <dd>The business key.</dd>

  <dt>string `k_country`</dt>
  <dd>Country key. 

  <dt>string `k_location`</dt>
  <dd>The location key.</dd>

  <dt>string `k_region`</dt>
  <dd>Region key. 

  <dt>string `s_mail`</dt>
  <dd>The location email address.</dd>

  <dt>string `s_phone`</dt>
  <dd>The location phone number.</dd>

  <dt>string `s_title`</dt>
  <dd>The location title.</dd>

  <dt>string `text_address`</dt>
  <dd>The location's full address.</dd>

  <dt>string `url_logo`</dt>
  <dd>
    The location logo's URL. This will only be set if the location has a logo and contains small thumbnail of the image.
  </dd>

  <dt>string `url_logo_source`</dt>
  <dd>The location logo's URL. This will only be set if the location has a logo and contains full uploaded image.</dd>
</dl>
  public $a_location;

  /**
   * The business key used internally by WellnessLiving.
   *
   * In case when passed regular or franchisee business returns only locations for requested business.
   * In case when passed franchisor business returns locations for all franchisees of this franchisor.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The primary keys of the selected businesses.
   * You can specify this instead of {@link ListModel::$k_business} to load data for many businesses in one call.
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