<?php

namespace WellnessLiving\Wl\Business\Design;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that provides business design information.
 */
class BusinessDesignModel extends WlModelAbstract
{
  /**
   * Design data for a business.
   *
   * Contains the following keys:
   *
   * <dl>
   *   <dt>int <var>id_layout</var></dt>
   *   <dd>The layout ID. For more details, see {@link \WellnessLiving\Wl\Business\Design\RsPageFrontendHeaderLayoutSid}.</dd>
   *   <dt>int <var>id_logo_position</var></dt>
   *   <dd>The logo position ID. For more details, see {@link \WellnessLiving\Wl\Business\Design\RsBusinessDesignLogoPositionSid}.</dd>
   *   <dt>int <var>id_logo_style</var></dt>
   *   <dd>The logo style ID. For more details, see {@link \WellnessLiving\Wl\Business\Design\RsBusinessDesignLogoStyleSid}.</dd>
   *   <dt>bool <var>is_attend_self</var></dt>
   *   <dd>If <tt>true</tt>, clients can check in using the Client Web App and Achieve Web App.</dd>
   *   <dt>bool <var>is_class_capacity</var></dt>
   *   <dd>If <tt>true</tt>, the capacity and number of clients signed up will be shown.</dd>
   *   <dt>bool <var>is_class_quick</var></dt>
   *   <dd>If <tt>true</tt>, the quick class filter will be shown.</dd>
   *   <dt>bool <var>is_show_name</var></dt>
   *   <dd>If <tt>true</tt>, the business name will be shown.</dd>
   *   <dt>string <var>s_color_background</var></dt>
   *   <dd>the frontend background color.</dd>
   *   <dt>string <var>s_color_header</var></dt>
   *   <dd>The frontend menu header color.</dd>
   *   <dt>string <var>s_color_menu_border</var></dt>
   *   <dd>The frontend menu border color.</dd>
   *   <dt>string <var>s_color_menu_element</var></dt>
   *   <dd>The menu element color.</dd>
   *   <dt>string <var>s_color_menu_hover</var></dt>
   *   <dd>The frontend menu hover color.</dd>
   *   <dt>string <var>s_color_menu_hover_background</var></dt>
   *   <dd>The background color of the frontend menu hover.</dd>
   *   <dt>string <var>s_color_menu_press</var></dt>
   *   <dd>The frontend menu press color.</dd>
   *   <dt>string <var>s_color_submenu</var></dt>
   *   <dd>The frontend submenu color.</dd>
   *   <dt>string <var>s_color_submenu_element</var></dt>
   *   <dd>The frontend submenu element color.</dd>
   *   <dt>string <var>s_color_submenu_hover</var></dt>
   *   <dd>The frontend submenu hover color.</dd>
   *   <dt>string <var>s_color_submenu_press</var></dt>
   *   <dd>The frontend submenu press color.</dd>
   *   <dt>string <var>s_fb_pixel_id</var></dt>
   *   <dd>The Facebook Pixel ID, used for Facebook Analytics tracking. This will be an empty string if tracking is disabled.</dd>
   *   <dt>string <var>s_ga_tracking_id</var></dt>
   *   <dd>The Google Analytics Tracking ID, used for Google Analytics tracking. This will be an empty string if tracking is disabled.</dd>
   *   <dt>string <var>s_gtm_container_id</var></dt>
   *   <dd>The Google Tag Manager Container ID, used for Google Analytics tracking. This will be an empty string if tracking is disabled.</dd>
   *   <dt>string <var>s_url_background</var></dt>
   *   <dd>The path to the background image.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_data;

  /**
   * Business key to get design data.
   *
   * May be <tt>null</tt>. In this case default business design data is returned.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>