<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Resource\Image\ImageIconSid;
use WellnessLiving\Wl\Resource\Image\ImageShapeSid;
use WellnessLiving\Wl\Service\ServicePriceSid;
use WellnessLiving\Wl\Service\ServiceRequireSid;

/**
 * Retrieves information about assets in the current asset category.
 */
class AssetListModel extends WlModelAbstract
{
  /**
     * A list of information about assets:
     *
     * <dl>
     *   <dt>array <var>a_age_restrictions</var></dt>
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
     *   <dt>array <var>a_class_tab</var></dt>
     *   <dd>The key of service.</dd>
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
     *       <dd>The icon name. String representation of one of the {@link ImageIconSid} constants. This is only set if the image kind equals to `image`.</dd>
     *       <dt>string <var>sid_image_shape</var></dt>
     *       <dd>The shape name. String representation of one of the {@link ImageShapeSid} constants. This is set only if the image kind equals to `shape`.</dd>
     *       <dt>string <var>url</var></dt>
     *       <dd>The asset logo URL.</dd>
     *     </dl>
     *   </dd>
     *   <dt>array[] <var>a_period</var></dt>
     *   <dd>A list of asset periods with the following information:
     *     <dl>
     *       <dt>string <var>html_duration</var></dt>
     *       <dd>The HTML code used to display the asset duration.</dd>
     *       <dt>string <var>html_price</var></dt>
     *       <dd>The HTML code used to display the formatted price.</dd>
     *       <dt>int <var>i_duration</var></dt>
     *       <dd>The asset duration in minutes.</dd>
     *       <dt>int <var>id_price</var></dt>
     *       <dd>The asset period price type. One of {@link ServicePriceSid} constants.</dd>
     *       <dt>sting <var>m_price</var></dt>
     *       <dd>The asset period price.</dd>
     *     </dl>
     *   </dd>
     *   <dt>array <var>a_search_tag</var></dt>
     *   <dd>QUICK Search tag keys.</dd>
     *   <dt>bool <var>hide_application</var></dt>
     *   <dd>
     *     Determines whether the asset will be hidden in the White Label mobile apps.
     *     If `true`, the asset won't be displayed. Otherwise, this will be `false`.
     *   </dd>
     *   <dt>string <var>html_age_restriction</var></dt>
     *   <dd>The resource age restriction</dd>
     *   <dt>string <var>html_title</var></dt>
     *   <dd>The resource name.</dd>
     *   <dt>int <var>id_service_require</var></dt>
     *   <dd>The purchase rule. One of the {@link ServiceRequireSid} constants.</dd>
     *   <dt>bool <var>is_age_restricted</var></dt>
     *   <dd>Determines whether this service can't be booked due to age restrictions.</dd>
     *   <dt>string <var>k_class_tab</var></dt>
     *   <dd>Quick book tab key.</dd>
     *   <dt>string <var>k_resource</var></dt>
     *   <dd>The resource key.</dd>
     *   <dt>string <var>k_resource_category</var></dt>
     *   <dd>The resource category key.</dd>
     * </dl>
     *
     * @get result
     * @var array[]
     */
  public $a_asset;

  /**
     * A list of reserved assets.
     *
     * 1st level keys refer to asset keys.
     * 2nd level keys refer to asset numbers.
     * Values is keys of appointment bookings that reserve the asset, primary keys in {@link \RsAppointmentSql} table,
     * or `true` if asset reserved by class/event.
     *
     * For example, if you want to check if the 10th asset with the key of '15' is reserved,
     * you can check if `a_resource_busy['15']['10']` is free.
     *
     * If you're rebooking an appointment, check the value of `a_resource_busy['15']['10']`.
     * If it's equal to the key of your current appointment booking, you can assume the asset is available.
     *
     * @get result
     * @var array
     */
  public $a_asset_busy = [];

  /**
     * The selected date and time of the asset booking. It is used in cases when the business booking policy allows
     * clients to select a date and time, and then the available asset.
     *
     * @get get
     * @var string
     */
  public $dtl_date = false;

  /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default size.
     *
     * @get get
     * @var int
     */
  public $i_image_height = 0;

  /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
     * In case this value is not specified returned image will have default size.
     *
     * @get get
     * @var int
     */
  public $i_image_width = 0;

  /**
     * Mode type, one of {@link ModeSid} constants.
     *
     * @get get
     * @var int
     */
  public $id_mode = 0;

  /**
     * This is `true` if asset categories are loaded for back-end mode. Otherwise, this will be `false` for front-end mode.
     *
     * @get get
     * @var bool
     */
  public $is_backend = false;

  /**
     * `true` - search in all tabs.
     * `false` - search only for the selected book tab.
     *
     * @get get
     * @var bool
     */
  public $is_tab_all = false;

  /**
     * Key of the appointment, if we reschedule existing appointment.
     * It should be sent to ignore it when we get availability hours for the asset.
     *
     * @get get
     * @var string
     *
     */
  public $k_appointment = '0';

  /**
     * Business key.
     *
     * If not set, location's business will be used.
     *
     * @get get
     * @var string
     *
     */
  public $k_business = '0';

  /**
     * The class tab key used to filter assets.
     *
     * This will be `null` if not set yet or if elements with no specified class tab are selected.
     *
     * @get get
     * @var string
     *
     */
  public $k_class_tab = '0';

  /**
     * The location key.
     *
     * @get get
     * @var string
     *
     */
  public $k_location = '0';

  /**
     * The asset category key to show information for.
     *
     * @get get
     * @var string
     */
  public $k_resource_category = '0';

  /**
     * The asset layout key.
     * May be empty if asset category has no layout.
     *
     * @get result
     * @var string
     */
  public $k_resource_layout;

  /**
     * Timezone of date and time of asset booking.
     *
     * Empty if {@link AssetListModel::$dtl_date} not set or client can't change in which timezone dates should be shown.
     *
     * @get get
     * @var string
     */
  public $k_timezone = '';

  /**
     * Client to get information for.
     *
     * If client not set, returns full asset list without client restrictions.
     *
     * @get get
     * @var string|null
     *
     */
  public $uid = null;
}

?>