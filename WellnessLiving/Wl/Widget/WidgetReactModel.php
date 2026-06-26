<?php

namespace WellnessLiving\Wl\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for managing widget frontend URL.
 *
 * @method WlModelRequest post()
 */
class WidgetReactModel extends WlModelAbstract
{
  /**
   * New url for the widget frontend.
   * Empty string for reset to default.
   *
   * @post post,result
   * @var string|null
   */
  public $url_frontend = null;
}

?>