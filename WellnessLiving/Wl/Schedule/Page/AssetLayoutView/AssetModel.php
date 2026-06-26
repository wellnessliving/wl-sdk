<?php

namespace WellnessLiving\Wl\Schedule\Page\AssetLayoutView;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves data about selected and reserved assets within an asset category to show on a layout.
 *
 * @method WlModelRequest get() Gets data about selected and reserved assets within an asset category which are needed for a service or class to   show on a layout.
 */
class AssetModel extends WlModelAbstract
{
  /**
   * Asset category data of selected asset. Has next structure:
   *
   * <dl>
   *   <dt>array[] `a_resource_list`</dt>
   *   <dd>
   *     List of available assets. Every element has next keys:
   *     <dl>
   *       <dt>array `a_image`</dt>
   *       <dd>Asset image data.</dd>
   * 
   *       <dt>int `i_index`</dt>
   *       <dd>Number of asset. Actual for assets with quantity more than `1`.</dd>
   * 
   *       <dt>bool `is_current`</dt>
   *       <dd>`true` means that this asset is selected by client, `false` - otherwise.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>Key of asset.</dd>
   * 
   *       <dt>string `s_resource`</dt>
   *       <dd>Title of asset.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `is_client_select`</dt>
   *   <dd>`true` - client selected resource from current group; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_share`</dt>
   *   <dd>
   *     `true` - assets of this category do not belong to certain users but belong to session in general; `false` - assets belong to certain users.
   *   </dd>
   * 
   *   <dt>string `k_resource_layout`</dt>
   *   <dd>Key of asset layout.</dd>
   * 
   *   <dt>string `k_resource_type`</dt>
   *   <dd>Key of asset category.</dd>
   * 
   *   <dt>string `s_resource_type`</dt>
   *   <dd>Title of asset category.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_resource_type = [];

  /**
   * Date and time when class or appointment occurs.
   *
   * `null` if not initialized yet.
   *
   * @get get
   * @var string|null
   */
  public $dtu_date = null;

  /**
   * Index of booked asset.
   *
   * `null` if not initialized yet.
   *
   * @get get
   * @var int|null
   */
  public $i_index = null;

  /**
   * Class period key.
   *
   * `null` if not initialized yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Location key.
   *
   * `null` if not initialized yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * Asset key.
   *
   * `null` if not initialized yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * Service key.
   *
   * `null` if not initialized yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;
}

?>