<?php

namespace WellnessLiving\Wl\Profile\Page\Overview;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves client's profile overview widgets and summary cards settings.
 *
 * @method WlModelRequest post() Saves settings for client's profile overview widgets and summary cards.
 */
class ProfilePageOverviewModel extends WlModelAbstract
{
  /**
   * Client's profile overview summary cards settings. Each element has next structure: 
   *
   * <dl>
   *   <dt>int `i_order`</dt>
   *   <dd>Order of a summary card on page.</dd>
   * 
   *   <dt>int `id_card`</dt>
   *   <dd>
   *     ID of a profile overview summary card.
   *   </dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Whether profile overview summary card is hidden. `true` - hidden, `false` - otherwise.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_summary_card_list = [];

  /**
   * Client's profile overview widgets settings. Each element has next structure: 
   *
   * <dl>
   *   <dt>int `i_order`</dt>
   *   <dd>Order of a widget on page.</dd>
   * 
   *   <dt>int `id_widget`</dt>
   *   <dd>
   *     ID of a widget. ID of a profile overview widget.
   *   </dd>
   * 
   *   <dt>bool `is_collapsed`</dt>
   *   <dd>Whether profile overview widget is collapsed. `true` - collapsed, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Whether profile overview widget is hidden. `true` - hidden, `false` - otherwise.</dd>
   * </dl>
   * @post post
   * @var string
   */
  public $json_widget_list = '';

  /**
   * Business key.
   *
   * `null` if not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;
}

?>