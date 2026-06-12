<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlProjectSid;

/**
 * Gets all locations for a list of businesses.
 *
 * This can be used to get all locations from all businesses. When using this endpoint, note that it will return
 * a list of all locations in the system, potentially using substantial system resources. Using this endpoint can
 * potentially result in larger API calls than average calls made for other endpoints.
 */
class ListBulkModel extends WlModelAbstract
{
  /**
   * Short-form information about locations.
   *
   * Keys refer to location primary keys. Values refer to sub-arrays with the next keys:
   *
   * @get result
   * @var array
   */
<dl>
  <dt>float `f_latitude`</dt>
  <dd>The latitude coordinate.</dd>

  <dt>float `f_longitude`</dt>
  <dd>The longitude coordinate.</dd>

  <dt>float `f_rate`</dt>
  <dd>The location rate.</dd>

  <dt>int `i_order`</dt>
  <dd>The order number.</dd>

  <dt>string `k_business`</dt>
  <dd>The business's primary key.</dd>

  <dt>string `k_location`</dt>
  <dd>The location's primary key.</dd>

  <dt>string `s_title`</dt>
  <dd>The location title.</dd>

  <dt>string `text_address`</dt>
  <dd>The full location address.</dd>

  <dt>string `url_logo`</dt>
  <dd>The location logo.</dd>
</dl>
  public $a_location;

  /**
   * A list of models with full information about each location.
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>int[] `a_age`</dt>
  <dd>A list of ages that are permitted for visiting this location.</dd>

  <dt>int[] `a_amenities`</dt>
  <dd>A list of facilities that are available in this location.</dd>

  <dt>string[] `a_level`</dt>
  <dd>A list of levels that are suitable for visiting this location.</dd>

  <dt>array `a_logo`</dt>
  <dd>
    Information about the location logo used in WellnessLiving: <dl>
      <dt>int `i_height`</dt>
      <dd>The image height.</dd>

      <dt>int `i_width`</dt>
      <dd>The image width.</dd>

      <dt>string `s_url`</dt>
      <dd>The URL to the image.</dd>
    </dl>
  </dd>

  <dt>array `a_slide`</dt>
  <dd>
    A list of the location images.
Every element has the following keys: <dl>
      <dt>int `i_height`</dt>
      <dd>Height.</dd>

      <dt>int `i_width`</dt>
      <dd>Width.</dd>

      <dt>string `url_preview`</dt>
      <dd>URL to image preview.</dd>

      <dt>string `url_slide`</dt>
      <dd>URL to full image.</dd>
    </dl>
  </dd>

  <dt>array `a_work`</dt>
  <dd>
    The hours of operation for the location.
Fields are numbers representing specific days (1 is Monday, 7 is Sunday). Values are objects with the next fields: <dl>
      <dt>string `s_end`</dt>
      <dd>The time of day end in MySQL format.</dd>

      <dt>string `s_start`</dt>
      <dd>The time of day start in MySQL format.</dd>
    </dl>
  </dd>

  <dt>string|null `dtu_check`</dt>
  <dd>
    The date when the location actuality was last checked. `null` if the location has never been checked.
Set only in {@link ListBulkModel}, otherwise always `null`.
  </dd>

  <dt>string `dtu_create`</dt>
  <dd>The date when the location was created.</dd>

  <dt>float `f_latitude`</dt>
  <dd>The latitude coordinate of the location.</dd>

  <dt>float `f_longitude`</dt>
  <dd>The longitude coordinate of the location.</dd>

  <dt>string `html_description_full`</dt>
  <dd>The full description of the location.</dd>

  <dt>string `html_description_preview`</dt>
  <dd>A shorter description of the location.</dd>

  <dt>int `i_logo_height`</dt>
  <dd>Maximum location image height.</dd>

  <dt>int `i_logo_width`</dt>
  <dd>Maximum location image width.</dd>

  <dt>int|null `id_industry`</dt>
  <dd>
    The industry of the business.
`null` in case when industry didn't set for chosen business type, or for business types
where set value which is absent.
  </dd>

  <dt>bool `is_phone`</dt>
  <dd>`true` if to display phone number on location page. `false` otherwise.</dd>

  <dt>bool `is_top_choice`</dt>
  <dd>`true` if WellnessLiving identifies this is a top choice location, `false` otherwise.</dd>

  <dt>string `k_business`</dt>
  <dd>The key of the business this location belongs to.</dd>

  <dt>string `k_business_type`</dt>
  <dd>The key of the business type this location belongs to.</dd>

  <dt>string `k_location`</dt>
  <dd>The location key.</dd>

  <dt>string `k_timezone`</dt>
  <dd>The timezone.</dd>

  <dt>string `s_address`</dt>
  <dd>The physical address of the location.</dd>

  <dt>string `s_map`</dt>
  <dd>A string that can be used in navigator programs.</dd>

  <dt>string `s_phone`</dt>
  <dd>The phone number for the location.</dd>

  <dt>string `s_timezone`</dt>
  <dd>The system name of the time zone.</dd>

  <dt>string `s_title`</dt>
  <dd>The title of the location.</dd>

  <dt>string `text_address_individual`</dt>
  <dd>The address of the location.</dd>

  <dt>string `text_alias`</dt>
  <dd>
    The special system name, which can be used in custom location links.
This is usually based on name of the location, with extra characters removed.
However, it can also can be fully customized.
  </dd>

  <dt>string `text_business_type`</dt>
  <dd>The name of the business type.</dd>

  <dt>string `text_city`</dt>
  <dd>The city name of the location.</dd>

  <dt>string `text_country`</dt>
  <dd>The country name of the location.</dd>

  <dt>string `text_industry`</dt>
  <dd>The name of the industry of the business.</dd>

  <dt>string `text_mail`</dt>
  <dd>The email address.</dd>

  <dt>string `text_postal`</dt>
  <dd>Postal code of the location.</dd>

  <dt>string `text_region`</dt>
  <dd>The region name of the location.</dd>

  <dt>string `text_region_code`</dt>
  <dd>Region 2 or 3 letters abbreviation of the location. Can be empty, if abbreviation for region is not set.</dd>

  <dt>string `url_facebook`</dt>
  <dd>The Facebook URL of the location.</dd>

  <dt>string `url_instagram`</dt>
  <dd>The Instagram URL of the location.</dd>

  <dt>string `url_linkedin`</dt>
  <dd>The Linked In URL of the location.</dd>

  <dt>string `url_map`</dt>
  <dd>The URL of the location in Google Maps.</dd>

  <dt>string `url_microsite`</dt>
  <dd>The URL to the location entry in the WellnessLiving Explorer listing.</dd>

  <dt>string `url_site`</dt>
  <dd>The website URL of the location.</dd>

  <dt>string `url_twitter`</dt>
  <dd>The URL of the location's Twitter account.</dd>

  <dt>string `url_web`</dt>
  <dd>The URL to the business's Client Web App.</dd>

  <dt>string `url_youtube`</dt>
  <dd>The YouTube URL of the location.</dd>
</dl>
  public $a_location_full = [];

  /**
   * The ID of the directory if locations should be filtered by enabling directory integration.
   *
   * `0` if a directory filter isn't required.
   *
   * @get get
   * @var int
   * @see WlProjectSid
   */
  public $id_directory = 0;

  /**
   * A list of businesses. Business primary keys are serialized with JSON.
   *
   * Empty string if you need all locations in the system.
   *
   * @get get
   * @var string
   */
  public $s_business = '';

  /**
   * A list of locations. Location primary keys are serialized with JSON.
   *
   * @get get
   * @var string
   */
  public $s_location = '';
}

?>