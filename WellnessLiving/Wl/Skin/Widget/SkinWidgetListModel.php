<?php

namespace WellnessLiving\Wl\Skin\Widget;

use WellnessLiving\WlModelAbstract;

/**
 * Lists widget skins grouped by widget type for a business.
 */
class SkinWidgetListModel extends WlModelAbstract
{
  /**
   * Skins grouped by widget type.
   *
   * @get result
   * @var array
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