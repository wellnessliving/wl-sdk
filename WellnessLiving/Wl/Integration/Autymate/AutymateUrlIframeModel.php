<?php

namespace WellnessLiving\Wl\Integration\Autymate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api called to construct the iframe URL for Autymate.
 *
 * @method WlModelRequest get() Constructs the URL to add to the iframe to allow the user to access Autymate's platform.
 */
class AutymateUrlIframeModel extends WlModelAbstract
{
  /**
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * URL to use in the Autymate iframe.
   *
   * @get result
   * @var string
   */
  public $url_iframe = '';
}

?>