<?php

namespace WellnessLiving\Wl\Page\Backend;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get and update status of the left navigation panels and search field in the staff back office.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest put()
 */
class ConfigModel extends WlModelAbstract
{
  /**
   * Each element is about one panel in the left navigation. Any number of panels can be sent. All panels, which are not
   * sent, will not be changed.
   *
   * `null` to not change current setting in put requests.
   *
   * <dl>
   *   <dt>int `id_map`</dt>
   *
   * 
   *   <dt>bool `is_close`</dt>
   *   <dd>bool `true` if panel is minimized, `false` - otherwise.</dd>
   * </dl>
   * @get result
   * @put post
   * @var array[]|null
   */
  public $a_map_state = null;

  /**
   * `true` if search field is locked in opened mode.
   * `false` if search field is closed until user clicks on it.
   * `null` to not change current setting in put requests.
   *
   * @get result
   * @put post
   * @var bool|null
   */
  public $is_search_lock = null;

  /**
   * Key of the business, where we want to change staff back office settings.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';
}

?>