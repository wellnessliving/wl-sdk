<?php

namespace WellnessLiving\Wl\Session;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Encodes URL such that it can be used for redirect.
 *
 * @method WlModelRequest get() Encodes URL such that it can be used for redirect.
 */
class RedirectUrlModel extends WlModelAbstract
{
  /**
   * IP address of remote user.
   *
   * @get get
   * @var string
   */
  public $ip = '';

  /**
   * URL to encode.
   *
   * @get get,result
   * @var string
   */
  public $url = '';
}

?>