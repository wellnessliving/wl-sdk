<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Resource\Image\ImageIconSid;
use WellnessLiving\Wl\Resource\Image\ImageShapeSid;

/**
 * Retrieves assets that are required for a service booking.
 *
 * @method WlModelRequest get() Retrieves assets required for a service booking at the given date and time, including availability and busy status.  Returns the asset categories and individual assets linked to the service at the given location.  Each asset includes its availability flag for the requested time slot. The response also includes  {@link \Wl\Appointment\Book\Asset\Service\ServiceApi::$a_resource_busy} with currently reserved asset slots and a flag indicating  whether the current user is allowed to book unavailable assets.
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
   * @var array<string, array<int, string>>
   */
  public $a_resource_busy;

  /**
   * A list of assets required for the service booking.
   * Keys refer the asset category key(s).
   * Values refer to sub-arrays with next key(s).
   *
   * <dl>
   *   <dt>array[] `a_resource`</dt>
   *   <dd>
   *     A list of resources. Every element has the following keys:
   *     <dl>
   *       <dt>array `a_image`</dt>
   *       <dd>
   *         The asset's image data. 
   *         <dl>
   *           <dt>array `a_image`</dt>
   *           <dd>
   *             Image data. 
   *             <dl>
   *               <dt>int `i_height`</dt>
   *               <dd>Actual height of thumbnail image.</dd>
   * 
   *               <dt>int `i_height_src`</dt>
   *               <dd>Height of original image.</dd>
   * 
   *               <dt>int `i_rotate`</dt>
   *               <dd>Angle on which image was rotated compared to the original.</dd>
   * 
   *               <dt>int `i_width`</dt>
   *               <dd>Actual width of thumbnail image.</dd>
   * 
   *               <dt>int `i_width_src`</dt>
   *               <dd>Width of original image.</dd>
   * 
   *               <dt>bool `is-resize`</dt>
   *               <dd>
   *                 Whether thumbnail is a resized variant of original image. If `false`, `url-thumbnail`
   * equals `url-view`.
   *               </dd>
   * 
   *               <dt>string `url-view`</dt>
   *               <dd>URL to original image in file storage.</dd>
   * 
   *               <dt>string `url-thumbnail`</dt>
   *               <dd>
   *                 URL to resized and rotated image in file storage. If the original is larger than
   * the specified dimensions, a thumbnail is created and its link is returned. Otherwise,
   * the link to the original image is returned here.
   *               </dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>int `i_angle`</dt>
   *           <dd>Angle of shape rotation. Is set only if <var>sid_image</var> equals to <tt>shape</tt>.</dd>
   * 
   *           <dt>int `i_height`</dt>
   *           <dd>Height of image.</dd>
   * 
   *           <dt>int `i_width`</dt>
   *           <dd>Width of image.</dd>
   * 
   *           <dt>bool `is_empty`</dt>
   *           <dd>Whether is empty.</dd>
   * 
   *           <dt>string `k_resource`</dt>
   *           <dd>Resource key.</dd>
   * 
   *           <dt>string `sid_image`</dt>
   *           <dd>Image kind.</dd>
   * 
   *           <dt>string `sid_image_icon`</dt>
   *           <dd>
   *             Icon name.String representation of one of {@link ImageIconSid} constants.
   * Is set only if <var>sid_image</var> equals to <tt>image</tt>.
   *           </dd>
   * 
   *           <dt>string `sid_image_shape`</dt>
   *           <dd>
   *             Shape name. String representation of one of {@link ImageShapeSid} constants.
   * Is set only if <var>sid_image</var> equals to <tt>shape</tt>.
   *           </dd>
   * 
   *           <dt>string `url`</dt>
   *           <dd>Path to image. </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_quantity`</dt>
   *       <dd>Asset quantity.</dd>
   * 
   *       <dt>bool `is_available`</dt>
   *       <dd>Whether this asset has at least one free unit.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>The asset key. </dd>
   * 
   *       <dt>string `s_resource`</dt>
   *       <dd>The asset title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string|null `k_resource_layout`</dt>
   *   <dd>
   *     The asset's layout key.  This will be `null` if the asset category has no layout.
   *   </dd>
   * 
   *   <dt>string `s_resource_type`</dt>
   *   <dd>The title of asset category.</dd>
   * </dl>
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
   * Mode type, one of {@link ModeSid} constants.
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
   * The appointment booking key to ignore when {@link ServiceModel::$a_resource_busy} is derived.
   *
   * `null` if no appointment booking must be ignored.
   *
   * @get get
   * @var string|null
   */
  public $k_appointment_ignore = null;

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