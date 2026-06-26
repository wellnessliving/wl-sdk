<?php

namespace WellnessLiving\Core\Google;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a link for a user to sign in with Google+.
 *
 * @method WlModelRequest get() Returns a link for a user to sign in with Google+.
 */
class LoginLinkModel extends WlModelAbstract
{
  /**
   * A link for a user to sign in with Google+.
   *
   * @get result
   * @var string
   */
  public $url_redirect;
}

?>