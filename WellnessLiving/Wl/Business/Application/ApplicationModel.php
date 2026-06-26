<?php

namespace WellnessLiving\Wl\Business\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api point allowing to get information about the business application.
 *
 * @method WlModelRequest get() Gets information about the business application.
 */
class ApplicationModel extends WlModelAbstract
{
  /**
   * Key of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Application title. Empty for default application.
   *
   * @get result
   * @var string
   */
  public $text_application_title;
}

?>