<?php

namespace WellnessLiving\Wl\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api intended to return list of licenses for given business owner.
 *
 * @method WlModelRequest get()
 */
class ZoomUserListModel extends WlModelAbstract
{
  /**
   * List of all licensed for given business owner.
   *
   * @get result
   * @var array
   */
  public $a_license_list;

  /**
   * Percent of license in use.
   *
   * @get result
   * @var string
   */
  public $f_license_use;

  /**
   * Business key which currently owns zoom user.
   *
   * <tt>null</tt> in a case of system business.
   *
   * @get get
   * @var string|null
   */
  public $k_business_owner;
}

?>