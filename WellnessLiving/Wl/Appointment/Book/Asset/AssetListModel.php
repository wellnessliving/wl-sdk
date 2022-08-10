<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about assets in the current asset category.
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
   *     Empty array if there are no restrictions based on the age.
   *
   *     <dl>
   *       <dt>int|null <var>i_age_from</var></dt>
   *       <dd>Age from that event is allowed. `null` if minimal age is not limited or information is not available.</dd>
   *       <dt>int|null <var>i_age_to</var></dt>
   *       <dd>Age till that event is allowed. `null` if minimal age is not limited or information is not available.</dd>
   *       <dt>bool <var>is_age_public</var></dt>
   *       <dd>`true` if age restrictions are public and available, `false` if they are hidden.
   *         When restrictions are hidden and current user is not a staff member, age range will be empty.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array[] <var>a_direct_link</var>
   *   </dt>
   *   <dd>
   *     List of links to start booking from a direct link.
   *     It cannot be one link, because the same resource can be available in several booking tabs.
   *     So, each booking tab has own direct booking link.
   *     Each element has two values:
   *     <dl>
   *       <dt>string <var>k_class_tab</var></dt>
   *       <dd>Key of the book now tab.</dd>
   *       <dt>string <var>url_tab</var></dt>
   *       <dd>Booking URL. Will open booking wizard under related booking tab.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_image</var></dt>
   *   <dd>Information about asset logo:
   *     <dl>
   *       <dt>int <var>i_angle</var></dt>
   *       <dd>Angle of shape rotation. Is set only if image kind equals to <tt>shape</tt>.</dd>
   *       <dt>bool <var>is_empty</var></dt>
   *       <dd>Whether asset logo is empty.</dd>
   *       <dt>string <var>sid_image_icon</var></dt>
   *       <dd>Icon name. String representation of one of {@link \Wl\Resource\Image\ImageIconSid} constants. Is set only if image kind equals to <tt>image</tt>.</dd>
   *       <dt>string <var>sid_image_shape</var></dt>
   *       <dd>Shape name. String representation of one of {@link \Wl\Resource\Image\ImageShapeSid} constants. Is set only if image kind equals to <tt>shape</tt>.</dd>
   *       <dt>string <var>url</var></dt><dd>Asset logo URL.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_period</var></dt>
   *   <dd>A list of asset periods with information about them:
   *     <dl>
   *       <dt>string <var>html_duration</var></dt><dd>Duration of asset to paste into view.</dd>
   *       <dt>string <var>html_price</var></dt><dd>Formatted price of the asset period to paste into view.</dd>
   *       <dt>int <var>i_duration</var></dt><dd>Duration of asset in minutes.</dd>
   *       <dt>int <var>id_price</var></dt><dd>Asset period price type. One of {@link \RsServicePriceSid} constants.</dd>
   *       <dt>sting <var>m_price</var></dt><dd>Price of the asset period.</dd>
   *     </dl>
   *   </dd>
   *   <dt>bool <var>hide_application</var></dt>
   *   <dd>Whether asset will be hidden in the White Label mobile application. `true` means that asset will not be displayed, `false` otherwise.</dd>
   *   <dt>string <var>html_age_restriction</var></dt>
   *   <dd>Resource age restriction</dd>
   *   <dt>string <var>html_title</var></dt>
   *   <dd>Title of resource.</dd>
   *   <dt>int <var>id_service_require</var></dt>
   *   <dd>Purchase rule. One of {@link \RsServiceRequireSid} constants.</dd>
   *   <dt>bool <var>is_age_restricted</var></dt>
   *   <dd>Whether this service cannot be booked due to age restrictions.</dd>
   *   <dt>string <var>k_resource</var></dt>
   *   <dd>Resource key, primary key in {@link \RsResourceSql} table.</dd>
   *   <dt>string <var>k_resource_category</var></dt>
   *   <dd>Resource category key, primary key in {@link \RsResourceTypeSql} table.</dd>
   * </dl>
   *
   * `null` if not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_asset = null;

  /**
   * Selected date and time of asset booking.
   *   It is actual in case when business booking policy allows clients to select a date and time,
   *   then the available asset.
   *
   * @get get
   * @var string
   */
  public $dtl_date = false;

  /**
   * <tt>true</tt> - load asset categories for backend mode; <tt>false</tt> - for frontend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Class tab ID to filter assets.
   *
   * `null` if not set yet or select only elements with not specified class tab.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * ID of a location.
   *
   * `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * ID of an asset category to show information for.
   *
   * `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource_category = null;

  /**
   * ID of assets' layout.
   *
   * `null` if it is not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_resource_layout = null;
}

?>