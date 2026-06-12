<?php

namespace WellnessLiving\Wl\Resource\Layout;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Resource\Image\ImageIconSid;
use WellnessLiving\Wl\Resource\Image\ImageShapeSid;

/**
 * Displays information about an asset layout.
 */
class LayoutModel extends WlModelAbstract
{
  /**
   * The list of assets. Every element contains the following keys:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>array `a_image`</dt>
  <dd>
    The asset's appearance information.

      <dt>array `a_image`</dt>
      <dd>
        Image data. 
          <dt>int `i_height`</dt>
          <dd>Actual height of thumbnail image.</dd>

          <dt>int `i_height_src`</dt>
          <dd>Height of original image.</dd>

          <dt>int `i_rotate`</dt>
          <dd>Angle on which image was rotated compared to the original.</dd>

          <dt>int `i_width`</dt>
          <dd>Actual width of thumbnail image.</dd>

          <dt>int `i_width_src`</dt>
          <dd>Width of original image.</dd>

          <dt>bool `is-resize`</dt>
          <dd>
            Whether thumbnail is a resized variant of original image. If `false`, `url-thumbnail`
equals `url-view`.
          </dd>

          <dt>string `url-view`</dt>
          <dd>URL to original image in file storage.</dd>

          <dt>string `url-thumbnail`</dt>
          <dd>
            URL to resized and rotated image in file storage. If the original is larger than
the specified dimensions, a thumbnail is created and its link is returned. Otherwise,
the link to the original image is returned here.
          </dd>
        </dl>
      </dd>

      <dt>int `i_angle`</dt>
      <dd>Angle of shape rotation. Is set only if <var>sid_image</var> equals to <tt>shape</tt>.</dd>

      <dt>int `i_height`</dt>
      <dd>Height of image.</dd>

      <dt>int `i_width`</dt>
      <dd>Width of image.</dd>

      <dt>bool `is_empty`</dt>
      <dd>Whether is empty.</dd>

      <dt>int `k_resource`</dt>
      <dd>Resource key.</dd>

      <dt>string `sid_image`</dt>
      <dd>Image kind.</dd>

      <dt>string `sid_image_icon`</dt>
      <dd>
        Icon name.String representation of one of {@link ImageIconSid} constants.
Is set only if <var>sid_image</var> equals to <tt>image</tt>.
      </dd>

      <dt>string `sid_image_shape`</dt>
      <dd>
        Shape name. String representation of one of {@link ImageShapeSid} constants.
Is set only if <var>sid_image</var> equals to <tt>shape</tt>.
      </dd>

      <dt>string `url`</dt>
      <dd>Path to image. 
    </dl>
  </dd>

  <dt>int `i_cell_x`</dt>
  <dd>The vertical cell number. Not empty if assets are snapped to grid.</dd>

  <dt>int `i_cell_y`</dt>
  <dd>The horizontal cell number. Not empty if assets are snapped to grid.</dd>

  <dt>int `i_left`</dt>
  <dd>The horizontal offset in pixels. Not empty if assets aren't snapped to grid.</dd>

  <dt>int `i_top`</dt>
  <dd>The vertical offset in pixels. Not empty if assets aren't snapped to grid.</dd>

  <dt>int `i_index`</dt>
  <dd>Asset number.</dd>

  <dt>string `k_resource`</dt>
  <dd>The asset key. 

  <dt>string `s_name`</dt>
  <dd>Asset name.</dd>

  <dt>string `s_title`</dt>
  <dd>The asset title.</dd>
</dl>
  public $a_resource;

  /**
   * A list of custom shapes. Every element is an array with the following keys:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>float `f_height`</dt>
  <dd> Empty for other shapes.</dd>

  <dt>float `f_width`</dt>
  <dd> Empty for other shapes.</dd>

  <dt>int `i_degree_from`</dt>
  <dd> Empty for other shapes.</dd>

  <dt>int `i_degree_to`</dt>
  <dd> Empty for other shapes.</dd>

  <dt>int `i_left`</dt>
  <dd>The position of the shape by horizontal axis.</dd>

  <dt>int `i_radius`</dt>
  <dd>
    The radius for shapes {@link Wl\Resource\Layout\Shape\LayoutShapeSid::PIE} and
 Empty for other shapes.
  </dd>

  <dt>int `i_top`</dt>
  <dd>The position of the shape by vertical axis.</dd>

  <dt>int `id_resource_layout_shape`</dt>
  <dd>The shape type ID. One of the {@link LayoutShapeSid} constants.</dd>

  <dt>string `k_resource_layout_shape`</dt>
  <dd>The shape key. 

  <dt>string `s_color_background`</dt>
  <dd>The shape's background color.</dd>

  <dt>string `s_color_foreground`</dt>
  <dd>The shape's foreground color.</dd>

  <dt>string `s_text`</dt>
  <dd>The shape's title.</dd>
</dl>
  public $a_shape_custom;

  /**
   * A list of shapes and icons. Every element is an array with the following keys:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>int `i_cell_x`</dt>
  <dd>The cell number, positioned by the horizontal axis. Empty if grid is turned off.</dd>

  <dt>int `i_cell_y`</dt>
  <dd>The cell number, positioned by the vertical axis. Empty if grid is turned off.</dd>

  <dt>int `i_left`</dt>
  <dd>The horizontal position in pixels. Empty if grid is turned on.</dd>

  <dt>int `i_top`</dt>
  <dd>The vertical position in pixels. Empty if grid is turned on.</dd>

  <dt>int `id_shape_icon`</dt>
  <dd>The icon ID.</dd>
</dl>
  public $a_shape_icon;

  /**
   * The grid size.
   *
   * @get result
   * @var int
   */
  public $i_grid;

  /**
   * This will be `true` if snap to grid is enabled. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_grid;

  /**
   * The key of the layout.
   *
   * @get get
   * @var string
   */
  public $k_resource_layout = '0';

  /**
   * The key of the asset category.
   *
   * @get result
   * @var string
   */
  public $k_resource_type;

  /**
   * The color for active assets. Hex encoding with prefix `#`.
   *
   * @get result
   * @var string
   */
  public $s_color_active;

  /**
   * This will be `true` if asset names are displayed. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $show_name;

  /**
   * This will be `true` if asset numbers are displayed. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $show_number;
}

?>