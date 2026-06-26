<?php

namespace WellnessLiving\Wl\Profile\Page\Overview;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 *  Api for getting widgets and summary cards setting data on client's Overview page.
 *
 * @method WlModelRequest get() Retrieves settings for client's profile overview widgets and summary cards to display in Customize panel.
 * @method WlModelRequest post() Saves settings for client's profile overview widgets and summary cards.
 */
class OverviewCustomizePanelModel extends WlModelAbstract
{
  /**
   * List of summary cards. Each element has next structure: 
   *
   * <dl>
   *   <dt>int `i_order`</dt>
   *   <dd>Order of a summary cards on client's overview page.</dd>
   * 
   *   <dt>int `id_card`</dt>
   *   <dd>ID of a profile summary card.</dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Whether profile summary card is hidden. `true` - hidden, `false` - otherwise.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array[]
 */
  public $a_summary_card = [];

  /**
   * List of widgets. Each element has next structure: 
   *
   * <dl>
   *   <dt>int `i_order`</dt>
   *   <dd>Order of a widget on client's overview page.</dd>
   * 
   *   <dt>int `id_widget`</dt>
   *   <dd>ID of a profile overview widget.</dd>
   * 
   *   <dt>bool `is_collapsed`</dt>
   *   <dd>Whether profile overview widget is collapsed. `true` - collapsed,
   *  `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Whether profile overview widget is hidden. `true` - hidden, `false` - otherwise.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array[]
   */
  public $a_widget = [];

  /**
   * Key of the business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';
}

?>