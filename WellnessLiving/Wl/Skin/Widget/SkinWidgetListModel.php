<?php

namespace WellnessLiving\Wl\Skin\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\RsSkinSid;

/**
 * Lists widget skins grouped by widget type for a business.
 */
class SkinWidgetListModel extends WlModelAbstract
{
  /**
   * List of Widget skins grouped by widget type.
   *
   * Skin type, one of {@link RsSkinSid} constants.
   *
   * The array structure:
   * Keys - Skin type, one of {@link RsSkinSid} constants.
   * Values - arrays with next keys:
   *
   * @get result
   * @var array[][]
   */
  public $a_widget_skin = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>