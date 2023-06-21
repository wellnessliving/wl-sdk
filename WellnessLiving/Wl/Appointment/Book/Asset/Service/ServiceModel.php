<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset\Service;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves assets that are required for a service booking.
 */
class ServiceModel extends WlModelAbstract
{
  /**
   * A list of reserved assets.
   *
   * 1st level keys refer to asset keys.
   * 2nd level keys refer to asset numbers.
   * Values refer to keys of appointment bookings that reserve the asset(s).
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
  public $a_resource_busy;

  /**
   * A list of assets required for the service booking.
   * Keys refer the asset category key(s).
   * Values refer to sub-arrays with next structure:
   * <dl>
   *   <dt>
   *     array[] <var>a_resource</var>
   *   </dt>
   *   <dd>
   *     A list of resources. Every element has the following keys:
   *     <dl>
   *       <dt>
   *         array <var>a_image</var>
   *       </dt>
   *       <dd>
   *         The asset's image data. See {@link RsResourceImage::data()} for details.
   *       </dd>
   *       <dt>
   *         bool <var>is_available</var>
   *       </dt>
   *       <dd>
   *         If `true`, then this asset has at least one free unit.
   *         If `false`, then this asset has no free units.
   *       </dd>
   *       <dt>
   *         string <var>k_resource</var>
   *       </dt>
   *       <dd>
   *         The asset key.
   *       </dd>
   *       <dt>
   *         string <var>s_resource</var>
   *       </dt>
   *       <dd>
   *         The asset title.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string|null <var>k_resource_layout</var>
   *   </dt>
   *   <dd>
   *     The asset's layout key.
   *     This will be `null` if the asset category has no layout.
   *   </dd>
   *   <dt>
   *     string <var>s_resource_type</var>
   *   </dt>
   *   <dd>
   *     The title of asset category.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_resource_type;

  /**
   * Can the staff members book reserved assets.
   *
   * @get result
   * @var bool
   */
  public $can_book_unavailable_assets;

  /**
   * The appointment booking date selected by the user.
   *
   * @get get
   * @var string
   */
  public $dt_start = '';

  /**
   * Mode type, one of {@link \Wellnessliving\Wl\Mode\ModeSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_mode = 0;

  /**
   * If `true`, back-end mode is selected.
   * In this mode, the list of asset categories must be returned even if asset selection is disabled for clients.
   *
   * If `false` for a case of front-end mode.
   * In this mode, the list of asset categories won't be returned if asset selection is disabled for clients.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Whether to show both grid layouts and custom layouts.
   *
   * `true` if custom layout should be included in the result.
   * `false` if only grid layout can be used.
   *
   * @get get
   * @var bool
   */
  public $is_grid_any = false;

  /**
   * Whether unavailable assets should be included.
   *
   * @get get
   * @var bool
   */
  public $is_show_unavailable_assets = false;

  /**
   * The selected location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The selected service's key.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * Timezone of date and time of service start.
   *
   * Empty if client can't change in which timezone dates should be shown.
   *
   * @get get
   * @var string
   */
  public $k_timezone = '';

  /**
   * User to get information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>