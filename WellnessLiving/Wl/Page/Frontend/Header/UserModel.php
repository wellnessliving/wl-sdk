<?php

namespace WellnessLiving\Wl\Page\Frontend\Header;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Render HTML of the frontend user menu.
 *
 * @method WlModelRequest get()
 */
class UserModel extends WlModelAbstract
{
  /**
   * Rendered HTML of the frontend user menu.
   *
   * @get result
   * @var string
   */
  public $html_menu;

  /**
   * Rendered HTML of the frontend user block.
   *
   * @get result
   * @var string
   */
  public $html_user;

  /**
   * Business key. Empty if user is not logged in.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Current location.
   *
   * @get get
   * @var string
   */
  public $text_current = '';
}

?>