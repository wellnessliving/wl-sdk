<?php

namespace WellnessLiving\Wl\Business\Design;

use WellnessLiving\WlModelAbstract;

/**
 * Provides business design information.
 */
class BusinessDesignModel extends WlModelAbstract
{
  /**
   * Design data for a business.
   *
   * Contains the following keys:
   *
   * <dl>
   *   <dt>bool `hide_past_days`</dt>
   *   <dd>Clients only see today's and upcoming sessions.</dd>
   * 
   *   <dt>int `id_layout`</dt>
   *   <dd>Layout ID. For more details, see {@link RsPageFrontendHeaderLayoutSid}.</dd>
   * 
   *   <dt>int `id_logo_position`</dt>
   *   <dd>Logo position ID. For more details, see {@link RsBusinessDesignLogoPositionSid}.</dd>
   * 
   *   <dt>int `id_logo_style`</dt>
   *   <dd>Logo style ID. For more details, see {@link RsBusinessDesignLogoStyleSid}.</dd>
   * 
   *   <dt>bool `is_attend_self`</dt>
   *   <dd>If <tt>true</tt> clients can check-in using the Client Web App and Achieve Web App.</dd>
   * 
   *   <dt>bool `is_appointment_capacity`</dt>
   *   <dd>If <tt>true</tt> the capacity and number of clients signed up to the appointment will be shown.</dd>
   * 
   *   <dt>bool `is_class_capacity`</dt>
   *   <dd>If <tt>true</tt> the capacity and number of clients signed up to the class will be shown.</dd>
   * 
   *   <dt>bool `is_class_quick`</dt>
   *   <dd>If <tt>true</tt>, the quick class filter will be shown.</dd>
   * 
   *   <dt>bool `is_class_spot_only`</dt>
   *   <dd>
   *     `true` to display only available spots (e.g., "3 spots left");
   *  `false` to display both available spots and total capacity (e.g., "3 spots left of 10").
   *   </dd>
   * 
   *   <dt>bool `is_show_name`</dt>
   *   <dd>If <tt>true</tt>, the business name will be shown.</dd>
   * 
   *   <dt>string `s_color_background`</dt>
   *   <dd>Background color of frontend.</dd>
   * 
   *   <dt>string `s_color_header`</dt>
   *   <dd>Header color of frontend menu.</dd>
   * 
   *   <dt>string `s_color_menu_border`</dt>
   *   <dd>Border color of frontend menu.</dd>
   * 
   *   <dt>string `s_color_menu_element`</dt>
   *   <dd>Menu element color</dd>
   * 
   *   <dt>string `s_color_menu_hover`</dt>
   *   <dd>Hover colour of front end menu.</dd>
   * 
   *   <dt>string `s_color_menu_hover_background`</dt>
   *   <dd>Background hover color of front end menu.</dd>
   * 
   *   <dt>string `s_color_menu_press`</dt>
   *   <dd>Press colour of front end menu.</dd>
   * 
   *   <dt>string `s_color_submenu`</dt>
   *   <dd>Submenu colour of front end menu.</dd>
   * 
   *   <dt>string `s_color_submenu_element`</dt>
   *   <dd>Submenu element color of front end menu.</dd>
   * 
   *   <dt>string `s_color_submenu_hover`</dt>
   *   <dd>Hover color of submenu of front end menu</dd>
   * 
   *   <dt>string `s_color_submenu_press`</dt>
   *   <dd>Press color of submenu in front end menu.</dd>
   * 
   *   <dt>string `s_fb_pixel_id`</dt>
   *   <dd>Facebook Pixel ID. Used for Facebook analytics tracking. Empty string if tracking is disabled.</dd>
   * 
   *   <dt>string `s_ga_tracking_id`</dt>
   *   <dd>Google Analytics Tracking ID. Used for Google Analytics tracking. Empty string if tracking is disabled.</dd>
   * 
   *   <dt>string `s_gtm_container_id`</dt>
   *   <dd>Google Tag Manager Container ID. Used for Google Analytics tracking. Empty string if tracking is disabled.</dd>
   * 
   *   <dt>string `s_url_background`</dt>
   *   <dd>Path to the background image.</dd>
   * </dl>
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