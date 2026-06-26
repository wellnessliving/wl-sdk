<?php

namespace WellnessLiving\Wl\Skin;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of Lead Skin.
 *
 * @method WlModelRequest get() Gets list of Lead Widgets.
 */
class WidgetLeadSkinModel extends WlModelAbstract
{
  /**
   * Lead skin list with the next structure: 
   *
   * <dl>
   *   <dt>string `k_skin`</dt>
   *   <dd>Key of the skin.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the skin.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_lead_skin = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>