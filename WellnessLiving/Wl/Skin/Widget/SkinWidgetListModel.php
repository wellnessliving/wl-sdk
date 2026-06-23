<?php

namespace WellnessLiving\Wl\Skin\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsSkinSid;

/**
 * Lists widget skins grouped by widget type for a business.
 *
 * @method WlModelRequest get() Returns widget skins grouped by widget type for the given business.  Returns all configured widget skins for the business, organized by widget type. Used to populate the widget management list so administrators can select and edit existing skins.
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
   * <dl>
   *   <dt>string `k_skin`</dt>
   *   <dd>Skin key. </dd>
   * 
   *   <dt>string `text_widget_name`</dt>
   *   <dd>Widget name.</dd>
   * </dl>
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