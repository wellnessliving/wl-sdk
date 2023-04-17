<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about assets in the current asset category.
 */
class AssetListModel extends WlModelAbstract
{
  /**
   * A list of information about assets.
   *
   * <dl>
   *   <dt>array <var>a_age_restrictions</var</dt>
   *   <dd>
   *     Information about age restrictions for this event.
   *
   *     This will be an empty array if there aren't any age restrictions.
   *
   *     <dl>
   *       <dt>int|null <var>i_age_from</var></dt>
   *       <dd>The minimum age permitted for the event. This will be `null` if a minimum age isn't set or available.</dd>
   *       <dt>int|null <var>i_age_to</var></dt>
   *       <dd>The maximum age permitted for the event. This will be `null` if a maximum age isn't set or available.</dd>
   *       <dt>bool <var>is_age_public</var></dt>
   *       <dd>This will be `true` if age restrictions are public and available. Otherwise, this will be `false` if they're hidden.
   *         When restrictions are hidden and current user isn't a staff member, the age range will be empty.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array[] <var>a_direct_link</var>
   *   </dt>
   *   <dd>
   *     A list of links to create a booking from a direct link (direct booking URL).
   *     The system needs to know what tab is associated with the booking. Therefore, there needs to be one link
   *     per tab.
   *     Each element has two values:
   *     <dl>
   *       <dt>string <var>k_class_tab</var></dt>
   *       <dd>The key of the book now tab.</dd>
   *       <dt>string <var>url_tab</var></dt>
   *       <dd>The direct booking URL. This will open the booking wizard under the related booking tab.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_image</var></dt>
   *   <dd>Information about the asset logo:
   *     <dl>
   *       <dt>int <var>i_angle</var></dt>
   *       <dd>The angle of the shape rotation. This is set only if the image is one of the default shapes.</dd>
   *       <dt>bool <var>is_empty</var></dt>
   *       <dd>Determines if the asset logo is empty.</dd>
   *       <dt>string <var>sid_image_icon</var></dt>
   *       <dd>The icon name. String representation of one of the {@link \WellnessLiving\Wl\Resource\Image\ImageIconSid} constants. This is only set if the image kind equals to `image`.</dd>
   *       <dt>string <var>sid_image_shape</var></dt>
   *       <dd>The shape name. String representation of one of the {@link \WellnessLiving\Wl\Resource\Image\ImageShapeSid} constants. This is set only if the image kind equals to `shape`.</dd>
   *       <dt>string <var>url</var></dt><dd>The asset logo URL.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_period</var></dt>
   *   <dd>A list of asset periods with the following information:
   *     <dl>
   *       <dt>string <var>html_duration</var></dt><dd>The HTML code used to display the asset duration.</dd>
   *       <dt>string <var>html_price</var></dt><dd>The HTML code used to display the formatted price.</dd>
   *       <dt>int <var>i_duration</var></dt><dd>The asset duration in minutes.</dd>
   *       <dt>int <var>id_price</var></dt><dd>The asset period price type. One of {@link \WellnessLiving\Wl\Service\ServicePriceSid} constants.</dd>
   *       <dt>sting <var>m_price</var></dt><dd>The asset period price.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array <var>a_search_tag</var></dt>
   *   <dd>QUICK Search tag IDs.</dd>
   *   <dt>bool <var>hide_application</var></dt>
   *   <dd>Determines whether the asset will be hidden in the White Label mobile apps.
   *     If `true`, the asset won't be displayed. Otherwise, this will be `false`.</dd>
   *   <dt>string <var>html_age_restriction</var></dt>
   *   <dd>The resource age restriction</dd>
   *   <dt>string <var>html_title</var></dt>
   *   <dd>The resource name.</dd>
   *   <dt>int <var>id_service_require</var></dt>
   *   <dd>The purchase rule. One of the {@link \WellnessLiving\Wl\Service\ServiceRequireSid} constants.</dd>
   *   <dt>bool <var>is_age_restricted</var></dt>
   *   <dd>Determines whether this service can't be booked due to age restrictions.</dd>
   *   <dt>string <var>k_resource</var></dt>
   *   <dd>The resource key.</dd>
   *   <dt>string <var>k_resource_category</var></dt>
   *   <dd>The resource category key.</dd>
   * </dl>
   *
   * This will be `null` if not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_asset = null;

  /**
   * The selected date and time of the asset booking. It is used in cases when the business booking policy allows
   * clients to select a date and time, and then the available asset.
   *
   * @get get
   * @var string
   */
  public $dtl_date = false;

  /**
   * This is `true` if asset categories are loaded for back-end mode. Otherwise, this will be `false` for front-end mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The class tab ID used to filter assets.
   *
   * This will be `null` if not set yet or if elements with no specified class tab are selected.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * The location ID.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The asset category ID to show information for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource_category = null;

  /**
   * The asset layout ID.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $k_resource_layout = null;
}

?>