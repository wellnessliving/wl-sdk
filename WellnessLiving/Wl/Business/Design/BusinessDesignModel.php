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
   *   <dd>Layout ID. For more details, see {@link RsPageFrontendHeaderLayoutSid}.</dd>
   *   <dt>int <var>id_logo_position</var></dt>
   *   <dd>Logo position ID. For more details, see {@link RsBusinessDesignLogoPositionSid}.</dd>
   *   <dt>int <var>id_logo_style</var></dt>
   *   <dd>Logo style ID. For more details, see {@link RsBusinessDesignLogoStyleSid}.</dd>
   *   <dt>bool <var>is_attend_self</var></dt>
   *   <dd>If <tt>true</tt> clients can check-in using the Client Web App and Achieve Web App.</dd>
   *   <dt>bool <var>is_class_capacity</var></dt>
   *   <dd>If <tt>true</tt> the capacity and number of clients signed up will be shown.</dd>
   *   <dt>bool <var>is_class_quick</var></dt>
   *   <dd>If <tt>true</tt>, the quick class filter will be shown.</dd>
   *   <dt>bool <var>is_show_name</var></dt>
   *   <dd>If <tt>true</tt>, the business name will be shown.</dd>
   *   <dt>string <var>s_color_background</var></dt>
   *   <dd>Background color of frontend.</dd>
   *   <dt>string <var>s_color_header</var></dt>
   *   <dd>Header color of frontend menu.</dd>
   *   <dt>string <var>s_color_menu_border</var></dt>
   *   <dd>Border color of frontend menu.</dd>
   *   <dt>string <var>s_color_menu_element</var></dt>
   *   <dd>Menu element color</dd>
   *   <dt>string <var>s_color_menu_hover</var></dt>
   *   <dd>Hover colour of front end menu.</dd>
   *   <dt>string <var>s_color_menu_hover_background</var></dt>
   *   <dd>Background hover color of front end menu.</dd>
   *   <dt>string <var>s_color_menu_press</var></dt>
   *   <dd>Press colour of front end menu.</dd>
   *   <dt>string <var>s_color_submenu</var></dt>
   *   <dd>Submenu colour of front end menu.</dd>
   *   <dt>string <var>s_color_submenu_element</var></dt>
   *   <dd>Submenu element color of front end menu.</dd>
   *   <dt>string <var>s_color_submenu_hover</var></dt>
   *   <dd>Hover color of submenu of front end menu</dd>
   *   <dt>string <var>s_color_submenu_press</var></dt>
   *   <dd>Press color of submenu in front end menu.</dd>
   *   <dt>string <var>s_fb_pixel_id</var></dt>
   *   <dd>Facebook Pixel ID. Used for Facebook analytics tracking. Empty string if tracking is disabled.</dd>
   *   <dt>string <var>s_ga_tracking_id</var></dt>
   *   <dd>Google Analytics Tracking ID. Used for Google Analytics tracking. Empty string if tracking is disabled.</dd>
   *   <dt>string <var>s_gtm_container_id</var></dt>
   *   <dd>Google Tag Manager Container ID. Used for Google Analytics tracking. Empty string if tracking is disabled.</dd>
   *   <dt>string <var>s_url_background</var></dt>
   *   <dd>Path to the background image.</dd>
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