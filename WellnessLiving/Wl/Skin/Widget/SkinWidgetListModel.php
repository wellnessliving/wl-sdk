<?php

namespace WellnessLiving\Wl\Skin\Widget;

use WellnessLiving\WlModelAbstract;

/**
 * Lists widget skins grouped by widget type for a business.
 */
class SkinWidgetListModel extends WlModelAbstract
{
  /**
   * List of Widget skins grouped by widget type.
   *
   * The array structure:
   *
   * Values - arrays with next keys:
   * <dl>
   *   <dt>string `k_skin`</dt><dd>Skin key.</dd>
   *   <dt>string `text_widget_name`</dt><dd>Widget name.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
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