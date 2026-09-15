<?php

namespace WellnessLiving\Wl\Staff\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * List of business staffs with the locations available to them.
 *
 * @method WlModelRequest get() Gathers a list of business staffs and locations that are available to them.  Builds the list of locations available to each staff member of the business and keys the  result by `uid_staff`, converting from the legacy `k_staff` key. Applications on the legacy  allow-list receive `k_staff`-keyed results instead, for backward compatibility.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of business staffs with the locations available to them, keyed by `uid_staff`.
   *
   * Each value is a list of locations available to that staff member: 
   *
   * <dl>
   *   <dt>string `k_location`</dt>
   *   <dd>Location key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Location title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_location;

  /**
   * Business key for which data will be collected.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>