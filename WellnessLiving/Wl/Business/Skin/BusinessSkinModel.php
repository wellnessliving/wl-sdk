<?php

namespace WellnessLiving\Wl\Business\Skin;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Business design (skin) settings API.
 *
 * @method WlModelRequest get() Gets business design (skin) settings.
 */
class BusinessSkinModel extends WlModelAbstract
{
  /**
   * Full business skin data.
   *
   * @get result
   * @var array
   */
  public $a_skin;

  /**
   * Period without any actions from owner after which we move focus on Client Search Field.
   *
   * @get result
   * @var int
   */
  public $i_focus_delay;

  /**
   * Measurement unit of <var>i_focus_delay</var>. Member of {@link ADurationSid}.
   *
   * @get result
   * @var int
   */
  public $id_focus_duration;

  /**
   * Current place ID.
   *
   * @get get
   * @var int
   */
  public $id_place = 0;

  /**
   * If <tt>null</tt> you will receive data for the default skin.
   *
   * @get get
   * @var string|null
   */
  public $k_business;

  /**
   * Navigation menu background colors.
   *
   * @get result
   * @var string
   */
  public $s_background_skin;

  /**
   * Left panel theme.
   *
   * @get result
   * @var string
   */
  public $s_left_theme;

  /**
   * Navigation menu theme.
   *
   * @get result
   * @var string
   */
  public $s_navmenu_theme;

  /**
   * Size of icons in the top header panel for quick access.
   *
   * @get result
   * @var string
   */
  public $sid_header_button_size;

  /**
   * Type of icons in the top header panel for quick access.
   *
   * @get result
   * @var string
   */
  public $sid_header_button_type;
}

?>