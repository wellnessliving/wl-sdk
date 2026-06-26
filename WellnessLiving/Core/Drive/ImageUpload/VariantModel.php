<?php

namespace WellnessLiving\Core\Drive\ImageUpload;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Rotates image by given link.
 *
 * @method WlModelRequest get() Returns information about image.
 */
class VariantModel extends WlModelAbstract
{
  /**
   * Information about image.
   *
   * <dl>
   *   <dt>int `i_height`</dt>
   *   <dd>Actual height of thumbnail image.</dd>
   * 
   *   <dt>int `i_height_src`</dt>
   *   <dd>Height of original image.</dd>
   * 
   *   <dt>int `i_rotate`</dt>
   *   <dd>Angle on which image was rotated compared to the original.</dd>
   * 
   *   <dt>int `i_width`</dt>
   *   <dd>Actual width of thumbnail image.</dd>
   * 
   *   <dt>int `i_width_src`</dt>
   *   <dd>Width of original image.</dd>
   * 
   *   <dt>bool `is-resize`</dt>
   *   <dd>
   *     Whether thumbnail is a resized variant of original image. If set to <tt>false</tt>, value returned in <var>url-thumbnail</var> equals value in <var>url-view</var>.
   *   </dd>
   * 
   *   <dt>string `url-view`</dt>
   *   <dd>Url to original image in file storage.</dd>
   * 
   *   <dt>string `url-thumbnail`</dt>
   *   <dd>
   *     Url to resized and rotated image in file storage. If size of original image is larger then specified by arguments, image thumbnail as created, and a link to this thumbnail is returned.
   * Otherwise link to original image is returned here.
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_image;

  /**
   * Angle to rotate image. Positive - counterclockwise. Negative - clockwise.
   *
   * @get get
   * @var int
   */
  public $i_rotate = 0;

  /**
   * Protection string.
   * Used to prevent custom link generation on client side.
   *
   * @get get
   * @var string
   */
  public $s_code = '';

  /**
   * Image link.
   *
   * @get get
   * @var string
   */
  public $s_link = '';
}

?>