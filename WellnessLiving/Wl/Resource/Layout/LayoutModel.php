<?php

namespace WellnessLiving\Wl\Resource\Layout;

use WellnessLiving\WlModelAbstract;

/**
 * Information about asset layout.
 */
class LayoutModel extends WlModelAbstract
{
  /**
   * Assets.
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