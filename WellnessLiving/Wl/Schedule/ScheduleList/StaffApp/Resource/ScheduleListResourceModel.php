<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Resource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Resource\Image\ImageIconSid;
use WellnessLiving\Wl\Resource\Image\ImageShapeSid;
use WellnessLiving\Wl\Resource\Image\ImageSid;

/**
 * Information about business assets.
 *
 * @method WlModelRequest get() Gets list of assets in business {@link \Wl\Schedule\ScheduleList\StaffApp\ScheduleListTrait::$k_business}.  Returns active assets available at locations the current staff member can access, together with  asset images and their configured work and break periods.
 */
class ScheduleListResourceModel extends WlModelAbstract
{
  /**
 * List of assets. Keys - asset IDs. 
 * Values - sub array with next keys:
 *
 * <dl>
 *   <dt>array `a_image`</dt>
 *   <dd>
 *     Data of asset image. 
 *     <dl>
 *       <dt>array `a_image`</dt>
 *       <dd>
 *         Image data. 
 *         <dl>
 *           <dt>int `i_height`</dt>
 *           <dd>Actual height of thumbnail image.</dd>
 * 
 *           <dt>int `i_height_src`</dt>
 *           <dd>Height of original image.</dd>
 * 
 *           <dt>int `i_rotate`</dt>
 *           <dd>Angle on which image was rotated compared to the original.</dd>
 * 
 *           <dt>int `i_width`</dt>
 *           <dd>Actual width of thumbnail image.</dd>
 * 
 *           <dt>int `i_width_src`</dt>
 *           <dd>Width of original image.</dd>
 * 
 *           <dt>bool `is-resize`</dt>
 *           <dd>
 *             Whether thumbnail is a resized variant of original image. If `false`, `url-thumbnail`
 * equals `url-view`.
 *           </dd>
 * 
 *           <dt>string `url-view`</dt>
 *           <dd>URL to original image in file storage.</dd>
 * 
 *           <dt>string `url-thumbnail`</dt>
 *           <dd>
 *             URL to resized and rotated image in file storage. If the original is larger than
 * the specified dimensions, a thumbnail is created and its link is returned. Otherwise,
 * the link to the original image is returned here.
 *           </dd>
 *         </dl>
 *       </dd>
 * 
 *       <dt>int `i_angle`</dt>
 *       <dd>Angle of shape rotation. Is set only if `sid_image` equals to `shape`.</dd>
 * 
 *       <dt>int `i_height`</dt>
 *       <dd>Height of image.</dd>
 * 
 *       <dt>int `i_width`</dt>
 *       <dd>Width of image.</dd>
 * 
 *       <dt>bool `is_empty`</dt>
 *       <dd>Whether is empty.</dd>
 * 
 *       <dt>string `k_resource`</dt>
 *       <dd>Resource key.</dd>
 * 
 *       <dt>string `sid_image`</dt>
 *       <dd>Image kind. String representation of one of {@link ImageSid} constants.</dd>
 * 
 *       <dt>string `sid_image_icon`</dt>
 *       <dd>
 *         Icon name. String representation of one of {@link ImageIconSid} constants.
 * Is set only if `sid_image` equals to `image`.
 *       </dd>
 * 
 *       <dt>string `sid_image_shape`</dt>
 *       <dd>
 *         Shape name. String representation of one of {@link ImageShapeSid} constants.
 * Is set only if `sid_image` equals to `shape`.
 *       </dd>
 * 
 *       <dt>string `url`</dt>
 *       <dd>Path to image. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `text_title`</dt>
 *   <dd>Asset title.</dd>
 * </dl>
 * @get result
 * @var array
 */
  public $a_resource;

  /**
 * Business key.
 *
 * @delete get
 * @get get
 * @post get
 * @put get
 * @var string
 */
  public $k_business = null;

  /**
 * User key.
 *
 * @delete get
 * @get get
 * @post get
 * @put get
 * @var string
 */
  public $uid = null;
}

?>