<?php

namespace WellnessLiving\Wl\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api intended to release zoom user from being used by business.
 *
 * @method WlModelRequest put()
 */
class ZoomUserReleaseModel extends WlModelAbstract
{
  /**
   * Business key which currently use zoom user.
   *
   * @put get
   * @var string
   */
  public $k_business_use;

  /**
   * Zoom user ID.
   *
   * @put post
   * @var string
   */
  public $s_user_id;
}

?>