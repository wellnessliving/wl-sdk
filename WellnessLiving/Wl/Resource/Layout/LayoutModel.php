<?php

namespace WellnessLiving\Wl\Resource\Layout;

use WellnessLiving\WlModelAbstract;

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
  public $a_resource;

  /**
   * A list of custom shapes. Every element is an array with the following keys:
   *
   * @get result
   * @var array[]
   */
  public $a_shape_custom;

  /**
   * A list of shapes and icons. Every element is an array with the following keys:
   *
   * @get result
   * @var array[]
   */
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