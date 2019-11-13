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
   public  $a_resource = [];

  /**
   * Custom shapes.
   *
   * @get result
   * @type {array[]}
   */
  public $a_shape_custom = [];

  /**
   * Icon shapes.
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