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
   * @see \RsAgeSid
   * @var int[]
   */
  public $a_age = [];

  /**
   * A list of facilities that are available in this location.
   *
   * @get result
   * @see \RsFacilitySid
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
   * Information about the location’s logo used in WellnessLiving:
   * <dl><dt>int <var>i_height</var></dt><dd>The image height.</dd>
   * <dt>int <var>i_width</var></dt><dd>The image width.</dd>
   * <dt>string <var>s_url</var></dt><dd>The URL to the image.</dd></dl>
   *
   * This will be `null` if not set.
   *
   * @get result
   * @var array|null
   */
  public $a_logo = null;

  /**
   * A list of the location’s images.
   * Every element has the following keys:
   * <ul><li>Number <tt>i_height</tt> Height.</li>
   * <li>Number <tt>i_width</tt> Width.</li>
   * <li>String <tt>url_preview</tt> URL to image preview.</li>
   * <li>String <tt>url_slide</tt> URL to full image.</li></ul>
   *
   * @get result
   * @var array
   */
  public $a_slide = [];

  /**
   * The hours of operation for the location.
   * Fields are numbers representing specific days (1 is Monday, 7 is Sunday). Values are objects with the next fields:
   * <ul><li>String <tt>s_end</tt> The time of day end in MySQL format.</li>
   * <li>String <tt>s_start</tt> The time of day start in MySQL format.</li></ul>
   *
   * @get result
   * @var array
   */
  public $a_work = [];

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
  public $html_description_full = '';

  /**
   * A shorter description of the location. A preview of {@link Wl_Location_View_ViewModel.html_description_full}.
   *
   * @get result
   * @var string
   */
  public $html_description_preview = '';

  /**
   * The industry of the business.
   *
   * @get result
   * @var int|null
   * @see \RsHomeTourSid
   */
  public $id_industry = 0;

  /**
   * `true` if WellnessLiving identifies this is a top choice location.
   * `false` if otherwise.
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
   * The location ID number that can be found with the {@link \WellnessLiving\Wl\Location\ListModel} endpoint.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * The physical address of the location.
   *
   * @get result
   * @var string
   */
  public $s_address = '';

  /**
   * A string that can be used in navigator programs.
   *
   * @get result
   * @var string
   */
  public $s_map = '';

  /**
   * The phone number for the location.
   *
   * @get result
   * @var string
   */
  public $s_phone = '';

  /**
   * The title of the location.
   *
   * @get result
   * @var string
   */
  public $s_title = '';

  /**
   * The system name of the time zone.
   *
   * @get result
   * @var string
   */
  public $s_timezone = '';

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
   * @var string
   * @see \RsHomeTourSid
   */
  public $text_industry = '';

  /**
   * The email address.
   *
   * @get result
   * @var string
   */
  public $text_mail = '';

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
   * The LinkedIn URL of the location.
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
   * The URL to the location’s entry in the WellnessLiving Explorer listing.
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