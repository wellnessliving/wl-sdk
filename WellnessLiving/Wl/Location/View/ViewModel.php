<?php

namespace WellnessLiving\Wl\Location\View;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information on a specified location.
 */
class ViewModel extends WlModelAbstract
{
  /**
   * List of ages, which are suitable for visiting this location.
   *
   * @get result
   * @see \RsAgeSid
   * @var int[]
   */
  public $a_age = [];

  /**
   * List of facilities, which are available in this location
   *
   * @get result
   * @see \RsFacilitySid
   * @var int[]
   */
  public $a_amenities = [];

  /**
   * List of levels, which are suitable for visiting this location.
   *
   * @get result
   * @var string[]
   */
  public $a_level = [];

  /**
   * Information about the location’s logo as used in WellnessLiving:
   * <ul><li>Number <tt>i_height</tt> Height.</li>
   * <li>Number <tt>i_width</tt> Width.</li>
   * <li>String <tt>s_url</tt> URL to image.</li></ul>
   *
   * <tt>null</tt> if not set.
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
   * Fields - numbers of days (1 is Monday, 7 is Sunday). Values - object with next fields:
   * <ul><li>String <tt>s_end</tt> Time of day end. In MySQL format.</li>
   * <li>String <tt>s_start</tt> Time of day start. In MySQL format.</li></ul>
   *
   * @get result
   * @var array
   */
  public $a_work = [];

  /**
   * Latitude coordinate of the location.
   *
   * @get result
   * @var float
   */
  public $f_latitude = 0;

  /**
   * Longitude coordinate of the location.
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
   * Industry of the business.
   *
   * @get result
   * @var int|null
   * @see \RsHomeTourSid
   */
  public $id_industry = 0;

  /**
   * `true` if WellnessLiving thinks that this is a top choice location.
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_top_choice = false;

  /**
   * Key of business this location belongs to.
   *
   * @get result
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of the business type this location belongs to.
   *
   * @get result
   * @var string
   */
  public $k_business_type = '0';

  /**
   * The location ID number that can be found with the Location\ListModel endpoint.
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
   * System name of the timezone.
   *
   * @get result
   * @var string
   */
  public $s_timezone = '';

  /**
   * Adress of the location.
   *
   * @get result
   * @var string
   */
  public $text_address_individual;

  /**
   * Special system name, which can be used in custom location links.
   * It is usually based on name of the location, where extra characters are removed.
   * But also can be fully custom.
   *
   * @get result
   * @var string
   */
  public $text_alias;

  /**
   * Name of the business type.
   *
   * @get result
   * @var string
   */
  public $text_business_type = '';

  /**
   * City name of the location.
   *
   * @get result
   * @var string
   */
  public $text_city;

  /**
   * Country name of the location.
   *
   * @get result
   * @var string
   */
  public $text_country;

  /**
   * Name of the industry of the business.
   *
   * @get result
   * @var string
   * @see \RsHomeTourSid
   */
  public $text_industry = '';

  /**
   * Email address.
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
   * Region name of the location.
   *
   * @get result
   * @var string
   */
  public $text_region;

  /**
   * Facebook url.
   *
   * @get result
   * @var string
   */
  public $url_facebook = '';

  /**
   * Instagram url.
   *
   * @get result
   * @var string
   */
  public $url_instagram = '';

  /**
   * Linked In url.
   *
   * @get result
   * @var string
   */
  public $url_linkedin = '';

  /**
   * The URL to a Google Map centered on the location.
   *
   * @get result
   * @var string
   */
  public $url_map;

  /**
   * The URL to the location’s microsite on WellnessLiving.
   *
   * @get result
   * @var string
   */
  public $url_microsite;

  /**
   * Website url.
   *
   * @get result
   * @var string
   */
  public $url_site = '';

  /**
   * Location Twitter account url.
   *
   * @get result
   * @var string
   */
  public $url_twitter = '';

  /**
   * URL to wellnessliving web application of the business.
   *
   * @get result
   * @var string
   */
  public $url_web = '';

  /**
   * Youtube url.
   *
   * @get result
   * @var string
   */
  public $url_youtube = '';
}

?>