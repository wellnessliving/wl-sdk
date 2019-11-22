<?php

namespace WellnessLiving\Wl\Resource\Layout;

use WellnessLiving\WlModelAbstract;

/**
 * Information about asset layout.
 */
class LayoutModel extends WlModelAbstract
{
  /**
   * Assets. Every element contains next keys:
   * <dl>
   *   <dt>array <var>a_image</var></dt>
   *   <dd>Asset appearance information.</dd>
   *   <dt>int <var>i_cell_x</var></dt>
   *   <dd>Vertical cell number. Not empty if assets are snapped to grid.</dd>
   *   <dt>int <var>i_cell_y</var></dt>
   *   <dd>Horizontal cell number. Not empty if assets are snapped to grid.</dd>
   *   <dt>int <var>i_index</var></dt>
   *   <dd>Asset number.</dd>
   *   <dt>int <var>i_left</var></dt>
   *   <dd>Horizontal offset in pixels. Not empty if assets are NOT snapped to grid.</dd>
   *   <dt>string <var>k_resource</var></dt>
   *   <dd>Asset key.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>Asset title.</dd>
   * </dl>
   *
   * @get result
   * @type {array[]}
   */
  public $a_resource = [];

  /**
   * List of custom shapes. Every element - array with keys:
   * <dl>
   *   <dt>
   *     float <var>f_height</var>
   *   </dt>
   *   <dd>
   *     Height for shape {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::RECTANGLE}. Empty for another shapes.
   *   </dd>
   *   <dt>
   *     float <var>f_width</var>
   *   </dt>
   *   <dd>
   *     Width for shape {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::RECTANGLE}. Empty for another shapes.
   *   </dd>
   *   <dt>
   *     int <var>i_degree_from</var>
   *   </dt>
   *   <dd>
   *     Start angle for shape {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::PIE}. Empty for another shapes.
   *   </dd>
   *   <dt>
   *     int <var>i_degree_to</var>
   *   </dt>
   *   <dd>
   *     End angle for shape {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::PIE}. Empty for another shapes.
   *   </dd>
   *   <dt>
   *     int <var>i_left</var>
   *   </dt>
   *   <dd>
   *     Position of shape by horizontal axis.
   *   </dd>
   *   <dt>
   *     int <var>i_radius</var>
   *   </dt>
   *   <dd>
   *     Radius for shapes {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::PIE} and
   *     {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid::CIRCLE}. Empty for another shapes.
   *   </dd>
   *   <dt>
   *     int <var>i_top</var>
   *   </dt>
   *   <dd>
   *     Position of shape by vertical axis.
   *   </dd>
   *   <dt>
   *     int <var>id_resource_layout_shape</var>
   *   </dt>
   *   <dd>
   *     Shape type. One of {@link \WellnessLiving\Wl\Resource\Layout\LayoutShapeSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_resource_layout_shape</var>
   *   </dt>
   *   <dd>
   *     Shape ID. Primary key in {@link \Wl\Resource\Layout\Shape\Sql} table.
   *   </dd>
   *   <dt>
   *     string <var>s_color_background</var>
   *   </dt>
   *   <dd>
   *     Shape background color.
   *   </dd>
   *   <dt>
   *     string <var>s_color_foreground</var>
   *   </dt>
   *   <dd>
   *     Shape foreground color.
   *   </dd>
   *   <dt>
   *     string <var>s_text</var>
   *   </dt>
   *   <dd>
   *     Shape title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @type {array[]}
   */
  public $a_shape_custom = [];

  /**
   * List of shapes-icons. Every element - array with keys:
   * <dl>
   *   <dt>int <var>i_cell_x</var></dt>
   *   <dd>Number of cell. Position by horizontal axis. Empty if grid is turned off.</dd>
   *   <dt>int <var>i_cell_y</var></dt>
   *   <dd>Number of cell. Position by vertical axis. Empty if grid is turned off.</dd>
   *   <dt>int <var>i_left</var></dt>
   *   <dd>Horizontal position in pixels. Empty if grid is turned on.</dd>
   *   <dt>int <var>i_top</var></dt>
   *   <dd>Vertical position in pixels. Empty if grid is turned on.</dd>
   *   <dt>int <var>id_shape_icon</var></dt>
   *   <dd>Icon ID. One of constants {@link \WellnessLiving\Wl\Resource\Image\ImageIconSid}.</dd>
   * </dl>
   *
   * @get result
   * @type {array[]}
   */
  public $a_shape_icon = [];

  /**
   * Grid size.
   *
   * @get result
   * @type {int}
   */
  public $i_grid = 0;

  /**
   * <tt>true</tt> - snap to grid; <tt>false</tt> - otherwise.
   *
   * @get result
   * @type {boolean}
   */
  public $is_grid = false;

  /**
   * ID of layout.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @type {string|null}
   */
  public $k_resource_layout = null;

  /**
   * ID of asset category.
   *
   * @get result
   * @type {string}
   */
  public $k_resource_type = '0';

  /**
   * Color for active assets. Hex encoding with prefix <tt>#</tt>.
   *
   * @get result
   * @type {string}
   */
  public $s_color_active = '';

  /**
   * <tt>true</tt> - show assets names; <tt>false</tt> - otherwise.
   *
   * @get result
   * @type {boolean}
   */
  public $show_name = false;

  /**
   * <tt>true</tt> - show assets numbers; <tt>false</tt> - otherwise.
   *
   * @get result
   * @type {boolean}
   */
  public $show_number = false;
}