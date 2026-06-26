<?php

namespace WellnessLiving\Wl\Classes\Virtual;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Keeps a record of closed notification modal.
 *
 * @method WlModelRequest get() Returns information about user that is currently signed in.
 */
class NotificationModel extends WlModelAbstract
{
  /**
   * Key of the business to which the closed notification modal window belongs.
   *
   * `null` if key of the business is not known (may only occur in legacy applications).
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of the visit whose modal is being dismissed.
   *
   * `null` if this value did not arrive from the client application.
   *
   * @get get
   * @var string|null
   */
  public $k_visit = null;

  /**
   * Key of the user that is dismissing the modal.
   *
   * `null` if this value did not arrive from the client application.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>