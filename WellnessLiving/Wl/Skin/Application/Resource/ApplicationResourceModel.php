<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

/**
 * Returns information used to generate application sources.
 */
class ApplicationResourceModel extends \WellnessLiving\Custom\Wl\Skin\Application\Resource\ApplicationResourceModel
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