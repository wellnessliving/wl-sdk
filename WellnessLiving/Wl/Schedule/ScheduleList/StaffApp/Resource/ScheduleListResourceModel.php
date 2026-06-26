<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Resource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about business assets.
 *
 * @method WlModelRequest get() Gets list of assets in business {@link \Wl\Schedule\ScheduleList\StaffApp\ScheduleListTrait::$k_business}.
 */
class ScheduleListResourceModel extends WlModelAbstract
{
  /**
   * List of assets. Keys - asset IDs; Values - sub array with next keys:
   *
   * <dl>
   *   <dt>array `a_image`</dt>
   *   <dd>Data of asset image.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Asset title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_resource;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>