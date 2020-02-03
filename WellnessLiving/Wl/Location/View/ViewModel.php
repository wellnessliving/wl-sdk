<?php

namespace WellnessLiving\Wl\Location\View;

use WellnessLiving\WlModelAbstract;

/**
 * Information about locations.
 */
class ViewModel extends WlModelAbstract
{
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
   * Email address.
   *
   * @get result
   * @var string
   */
  public $text_mail = '';

  /**
   * URL to load map, where location is marked.
   *
   * @get result
   * @var string
   */
  public $url_map = '';

  /**
   * URL to location site.
   *
   * @get result
   * @var string
   */
  public $url_microsite = '';
}

?>