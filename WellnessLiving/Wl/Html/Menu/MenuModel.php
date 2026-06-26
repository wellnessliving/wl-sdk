<?php

namespace WellnessLiving\Wl\Html\Menu;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * System menu for admins.
 *
 * @method WlModelRequest get() Checks the received data, loads the menu.
 */
class MenuModel extends WlModelAbstract
{
  /**
   * Menu list or an empty array if the menu for the specified unit could not be loaded
   * or user does not have enough privileges.
   *
   * @get result
   * @var array
   */
  public $a_menu;

  /**
   * Current place ID.
   *
   * @get get
   * @var int
   */
  public $id_place = 0;

  /**
   * The business in which the user wants to see the menu.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The user for which the menu should be displayed.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>