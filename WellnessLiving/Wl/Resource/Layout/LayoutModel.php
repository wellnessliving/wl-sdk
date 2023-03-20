<?php

namespace WellnessLiving\Wl\Resource\Layout;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays information about an asset layout.
 */
class LayoutModel extends WlModelAbstract
{
  /**
   * The asset(s). Every element contains the following keys:
   * <dl>
   *   <dt>array <var>a_image</var></dt>
   *   <dd>The asset's appearance information.</dd>
   *   <dt>int <var>i_cell_x</var></dt>
   *   <dd>The vertical cell number. Not empty if assets are snapped to grid.</dd>
   *   <dt>int <var>i_cell_y</var></dt>
   *   <dd>The horizontal cell number. Not empty if assets are snapped to grid.</dd>
   *   <dt>int <var>i_index</var></dt>
   *   <dd>Asset number.</dd>
   *   <dt>int <var>i_left</var></dt>
   *   <dd>The horizontal offset in pixels. Not empty if assets aren't snapped to grid.</dd>
   *   <dt>string <var>k_resource</var></dt>
   *   <dd>The asset key.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The asset title.</dd>
   * </dl>
   *
   * @get result
   * @type {array[]}
   */
  public $a_resource = [];

  /**
   * A list of custom shapes. Every element is an array with the following keys:
   * <dl>
   *   <dt>
   *     float <var>f_height</var>
   *   </dt>
   *   <dd>
   *     The height for the shape {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::RECTANGLE}. Empty for other shapes.
   *   </dd>
   *   <dt>
   *     float <var>f_width</var>
   *   </dt>
   *   <dd>
   *     The width for the shape {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::RECTANGLE}. Empty for other shapes.
   *   </dd>
   *   <dt>
   *     int <var>i_degree_from</var>
   *   </dt>
   *   <dd>
   *     The start angle for the shape {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::PIE}. Empty for other shapes.
   *   </dd>
   *   <dt>
   *     int <var>i_degree_to</var>
   *   </dt>
   *   <dd>
   *     The start angle for shape {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::PIE}. Empty for other shapes.
   *   </dd>
   *   <dt>
   *     int <var>i_left</var>
   *   </dt>
   *   <dd>
   *     The position of the shape by horizontal axis.
   *   </dd>
   *   <dt>
   *     int <var>i_radius</var>
   *   </dt>
   *   <dd>
   *     The radius for shapes {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::PIE} and
   *     {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::CIRCLE}. Empty for other shapes.
   *   </dd>
   *   <dt>
   *     int <var>i_top</var>
   *   </dt>
   *   <dd>
   *     The position of the shape by vertical axis.
   *   </dd>
   *   <dt>
   *     int <var>id_resource_layout_shape</var>
   *   </dt>
   *   <dd>
   *     The shape type. One of the {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_resource_layout_shape</var>
   *   </dt>
   *   <dd>
   *     The shape ID.
   *   </dd>
   *   <dt>
   *     string <var>s_color_background</var>
   *   </dt>
   *   <dd>
   *     The shape's background color.
   *   </dd>
   *   <dt>
   *     string <var>s_color_foreground</var>
   *   </dt>
   *   <dd>
   *     The shape's foreground color.
   *   </dd>
   *   <dt>
   *     string <var>s_text</var>
   *   </dt>
   *   <dd>
   *     The shape's title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @type {array[]}
   */
  public $a_shape_custom = [];

  /**
   * A list of shapes and icons. Every element is an array with the following keys:
   * <dl>
   *   <dt>int <var>i_cell_x</var></dt>
   *   <dd>The cell number, positioned by the horizontal axis. Empty if grid is turned off.</dd>
   *   <dt>int <var>i_cell_y</var></dt>
   *   <dd>The cell number, positioned by the vertical axis. Empty if grid is turned off.</dd>
   *   <dt>int <var>i_left</var></dt>
   *   <dd>The horizontal position in pixels. Empty if grid is turned on.</dd>
   *   <dt>int <var>i_top</var></dt>
   *   <dd>The vertical position in pixels. Empty if grid is turned on.</dd>
   *   <dt>int <var>id_shape_icon</var></dt>
   *   <dd>The icon ID. One of the {@link \WellnessLiving\Wl\Resource\Image\ImageIconSid} constants.</dd>
   * </dl>
   *
   * @get result
   * @type {array[]}
   */
  public $a_shape_icon = [];

  /**
   * The grid size.
   *
   * @get result
   * @type {int}
   */
  public $i_grid = 0;

  /**
   * This will be `true` if snap to grid is enabled. Otherwise, this will be `false`.
   *
   * @get result
   * @type {boolean}
   */
  public $is_grid = false;

  /**
   * The ID of the layout.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @type {string|null}
   */
  public $k_resource_layout = null;

  /**
   * The ID of the asset category.
   *
   * @get result
   * @type {string}
   */
  public $k_resource_type = '0';

  /**
   * The color for active assets. Hex encoding with prefix `#`.
   *
   * @get result
   * @type {string}
   */
  public $s_color_active = '';

  /**
   * This will be `true` if asset names are displayed. Otherwise, this will be `false`.
   *
   * @get result
   * @type {boolean}
   */
  public $show_name = false;

  /**
   * This will be `true` if asset numbers are displayed. Otherwise, this will be `false`.
   *
   * @get result
   * @type {boolean}
   */
  public $show_number = false;
}