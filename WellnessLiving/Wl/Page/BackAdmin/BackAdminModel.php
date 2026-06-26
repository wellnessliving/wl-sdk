<?php

namespace WellnessLiving\Wl\Page\BackAdmin;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows administrator to switch back to his administrator account when he signed in as a different user.
 *
 * @method WlModelRequest post() Switches administrator back to his administrator account when he signed in as a different user.
 */
class BackAdminModel extends WlModelAbstract
{
  /**
   * A link to redirect to an administrator account who is currently signed as a different user.
   *
   * @post result
   * @var string
   */
  public $url_redirect;
}

?>