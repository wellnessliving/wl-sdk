<?php

namespace WellnessLiving\Wl\Location\View;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information on a specified location.
 */
class ViewModel extends WlModelAbstract
{
  /**
   * A list of ages that are permitted for visiting this location.
   *
   * @get result
   * @see \WellnessLiving\WlAgeSid
   * @var int[]
   */
  public $a_age = [];

  /**
   * A list of facilities that are available in this location.
   *
   * @get result
   * @see \WellnessLiving\WlFacilitySid
   * @var int[]
   */
  public $a_amenities = [];

  /**
   * A list of levels that are suitable for visiting this location.
   *
   * @get result
   * @var string[]
   */
  public $a_level = [];

  /**
   * Information about the location logo used in WellnessLiving:
   * <dl>
   *   <dt>
   *     int <var>i_height</var>
   *   </dt>
   *   <dd>
   *     The image height.
   *   </dd>
   *   <dt>
   *     int <var>i_width</var>
   *   </dt>
   *   <dd>
   *     The image width.
   *   </dd>
   *   <dt>
   *     string <var>s_url</var>
   *   </dt>
   *   <dd>
   *     The URL to the image.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_logo;

  /**
   * A list of the location images.
   * Every element has the following keys:
   * <dl>
   *   <dt>
   *     int <var>i_height</var>
   *   </dt>
   *   <dd>
   *     Height.
   *   </dd>
   *   <dt>
   *     int <var>i_width</var>
   *   </dt>
   *   <dd>
   *     Width.
   *   </dd>
   *   <dt>
   *     string <var>url_preview</var>
   *   </dt>
   *   <dd>
   *     URL to image preview.
   *   </dd>
   *   <dt>
   *     string <var>url_slide</var>
   *   </dt>
   *   <dd>
   *     URL to full image.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_slide;

  /**
   * The hours of operation for the location.
   * Fields are numbers representing specific days (1 is Monday, 7 is Sunday). Values are objects with the next fields:
   * <dl>
   *   <dt>
   *     string <var>s_end</var>
   *   </dt>
   *   <dd>
   *     The time of day end in MySQL format.
   *   </dd>
   *   <dt>
   *     string <var>s_start</var>
   *   </dt>
   *   <dd>
   *     The time of day start in MySQL format.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_work;

  /**
   * The latitude coordinate of the location.
   *
   * @get result
   * @var float
   */
  public $f_latitude = 0;

  /**
   * The longitude coordinate of the location.
   *
   * @get result
   * @var float
   */
  public $f_longitude = 0;

  /**
   * The full description of the location.
   *
   * @get result
   * @var string
   */
  public $html_description_full;

  /**
   * A shorter description of the location. A preview of {@link \Wellnessliving\Wl\Location\View\ViewModel::$html_description_full}.
   *
   * @get result
   * @var string
   */
  public $html_description_preview;

  /**
   * Maximum location image height.
   *
   * @get get
   * @var int
   */
  public $i_logo_height = 100;

  /**
   * Maximum location image width.
   *
   * @get get
   * @var int
   */
  public $i_logo_width = 220;

  /**
   * The industry of the business.
   * `null` in case when industry didn't set for chosen business type, or for business types
   * where set value which is absent.
   *
   * @get result
   * @see \WellnessLiving\WlHomeTourSid
   * @var int|null
   */
  public $id_industry = 0;

  /**
   * `true` if to display phone number on location page. `False` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_phone = false;

  /**
   * `true` if WellnessLiving identifies this is a top choice location, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_top_choice = false;

  /**
   * The key of the business this location belongs to.
   *
   * @get result
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the business type this location belongs to.
   *
   * @get result
   * @var string
   */
  public $k_business_type = '0';

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Timezone primary key in {@link \AGeoTimezoneSql} table.
   *
   * @get result
   * @var string
   */
  public $k_timezone;

  /**
   * The physical address of the location.
   *
   * @get result
   * @var string
   */
  public $s_address;

  /**
   * A string that can be used in navigator programs.
   *
   * @get result
   * @var string
   */
  public $s_map;

  /**
   * The phone number for the location.
   *
   * @get result
   * @var string
   */
  public $s_phone;

  /**
   * The system name of the time zone.
   *
   * @get result
   * @var string
   */
  public $s_timezone;

  /**
   * The title of the location.
   *
   * @get result
   * @var string
   */
  public $s_title;

  /**
   * The address of the location.
   *
   * @get result
   * @var string
   */
  public $text_address_individual;

  /**
   * The special system name, which can be used in custom location links.
   * This is usually based on name of the location, with extra characters removed.
   * However, it can also can be fully customized.
   *
   * @get result
   * @var string
   */
  public $text_alias;

  /**
   * The name of the business type.
   *
   * @get result
   * @var string
   */
  public $text_business_type = '';

  /**
   * The city name of the location.
   *
   * @get result
   * @var string
   */
  public $text_city;

  /**
   * The country name of the location.
   *
   * @get result
   * @var string
   */
  public $text_country;

  /**
   * The name of the industry of the business.
   *
   * @get result
   * @see \WellnessLiving\WlHomeTourSid
   * @var string
   */
  public $text_industry = '';

  /**
   * The email address.
   *
   * @get result
   * @var string
   */
  public $text_mail;

  /**
   * Postal code of the location.
   *
   * @get result
   * @var string
   */
  public $text_postal;

  /**
   * The region name of the location.
   *
   * @get result
   * @var string
   */
  public $text_region;

  /**
   * Region 2 or 3 letters abbreviation of the location. Can be empty, if abbreviation for region is not set.
   *
   * @get result
   * @var string
   */
  public $text_region_code;

  /**
   * The Facebook URL of the location.
   *
   * @get result
   * @var string
   */
  public $url_facebook = '';

  /**
   * The Instagram URL of the location.
   *
   * @get result
   * @var string
   */
  public $url_instagram = '';

  /**
   * The Linked In URL of the location.
   *
   * @get result
   * @var string
   */
  public $url_linkedin = '';

  /**
   * The URL of the location in Google Maps.
   *
   * @get result
   * @var string
   */
  public $url_map;

  /**
   * The URL to the location entry in the WellnessLiving Explorer listing.
   *
   * @get result
   * @var string
   */
  public $url_microsite;

  /**
   * The website URL of the location.
   *
   * @get result
   * @var string
   */
  public $url_site = '';

  /**
   * The URL of the location's Twitter account.
   *
   * @get result
   * @var string
   */
  public $url_twitter = '';

  /**
   * The URL to the business's Client Web App.
   *
   * @get result
   * @var string
   */
  public $url_web = '';

  /**
   * The YouTube URL of the location.
   *
   * @get result
   * @var string
   */
  public $url_youtube = '';
}

?>