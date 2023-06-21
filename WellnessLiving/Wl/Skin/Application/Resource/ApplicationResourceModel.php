<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information used to generate application sources.
 */
class ApplicationResourceModel extends WlModelAbstract
{
  /**
   * The application data.
   *
   * @get result
   * @var array
   */
  public $a_application;

  /**
   * The business key.
   * Empty to get data for all businesses.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>