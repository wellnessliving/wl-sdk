<?php

namespace WellnessLiving\Wl\Location\View;

use WellnessLiving\WlModelAbstract;

/**
 * Information about locations.
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
   * Location logo:
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
   * Images of location slider.
   * Every element has next keys:
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
   * Working time of location.
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
   * Description of location. HTML code ready to putting on page.
   *
   * @get result
   * @var string
   */
  public $html_description_full = '';

  /**
   * Preview of {@link Wl_Location_View_ViewModel.html_description_full}. HTML code ready to putting on page.
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
   * Location ID.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Address of location.
   *
   * @get result
   * @var string
   */
  public $s_address = '';

  /**
   * String to be used as address in programs-navigators.
   *
   * @get result
   * @var string
   */
  public $s_map = '';

  /**
   * Phone of location.
   *
   * @get result
   * @var string
   */
  public $s_phone = '';

  /**
   * Title of location.
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
   * URL to load map, where location is marked.
   *
   * @get result
   * @var string
   */
  public $url_map;

  /**
   * URL to location site.
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
   * URL to wellnessliving web application of the business.
   *
   * @get result
   * @var string
   */
  public $url_web = '';

  /**
   * Youtube url.
   *
   * @var string
   */
  public $url_youtube = '';
}

?>