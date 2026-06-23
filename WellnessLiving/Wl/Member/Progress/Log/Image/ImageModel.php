<?php

namespace WellnessLiving\Wl\Member\Progress\Log\Image;

use WellnessLiving\WlModelAbstract;

/**
 * Progress image api.
 */
class ImageModel extends WlModelAbstract
{
  /**
   * Image data:
   *
   * <dl>
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     Image storage data.
   * 
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>Actual height of thumbnail image.</dd>
   * 
   *       <dt>int `i_height_src`</dt>
   *       <dd>Height of original image.</dd>
   * 
   *       <dt>int `i_rotate`</dt>
   *       <dd>Angle on which image was rotated compared to the original.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Actual width of thumbnail image.</dd>
   * 
   *       <dt>int `i_width_src`</dt>
   *       <dd>Width of original image.</dd>
   * 
   *       <dt>bool `is-resize`</dt>
   *       <dd>Whether thumbnail is a resized variant of original image. If `false`, `url-thumbnail`
   * equals `url-view`.</dd>
   * 
   *       <dt>string `url-view`</dt>
   *       <dd>URL to original image in file storage.</dd>
   * 
   *       <dt>string `url-thumbnail`</dt>
   *       <dd>
   *         URL to resized and rotated image in file storage. If the original is larger than
   * the specified dimensions, a thumbnail is created and its link is returned. Otherwise,
   * the link to the original image is returned here.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i-size`</dt>
   *   <dd>Max image size.</dd>
   * 
   *   <dt>int `i-thumbnail-height`</dt>
   *   <dd>Image thumbnail height.</dd>
   * 
   *   <dt>int `i-thumbnail-width`</dt>
   *   <dd>Image thumbnail width.</dd>
   * 
   *   <dt>string `s_link`</dt>
   *   <dd>Image link.</dd>
   * 
   *   <dt>string `url-action`</dt>
   *   <dd>Image upload url.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_image;

  /**
   * Local date of the progress picture.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * Business key.
   *
   * `null` if not initialized yet.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Save image command.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_command = '';

  /**
   * User key.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>