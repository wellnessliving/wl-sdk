<?php

namespace WellnessLiving\Wl\Business\AuthorizeSupport\Response;

use WellnessLiving\WlModelAbstract;

/**
 * Model for response to request enter into business location.
 */
class ResponseModel extends WlModelAbstract
{
  /**
   * Whether the user will be granted access or if access will be revoked.
   * If <tt>true</tt> - then grant access; If <tt>false</tt> - then revoke access.
   * Revoking access is a scheduled task set to be run within the next 15 minutes.
   *
   * @get get
   * @var bool
   */
  public $is_grant = false;

  /**
   * Key of the location to access.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of the user to grant access .
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>