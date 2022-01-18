<?php

namespace WellnessLiving\Config;

use WellnessLiving\WlRegionSid;

/**
 * Base class for all testing configurations.
 *
 * When creating an instance of a configuration class, the value of the <var>id_region</var> argument
 * affects the selection of the testing branch:
 * * <var>id_region</var>={@link \WellnessLiving\WlRegionSid::AP_SOUTHEAST_2} - Trunk branch;
 * * <var>id_region</var>={@link \WellnessLiving\WlRegionSid::US_EAST_1} - Staging branch.
 */
abstract class WlConfigDeveloper extends WlConfigAbstract
{
  /**
   * @inheritDoc
   */
  public const COOKIE_PERSISTENT='sp';

  /**
   * @inheritDoc
   */
  public const COOKIE_TRANSIENT='st';

  /**
   * @inheritDoc
   */
  protected const REGION_URL = [
    WlRegionSid::AP_SOUTHEAST_2 => 'https://demo.wellnessliving.com/',
    WlRegionSid::US_EAST_1 => 'https://staging.wellnessliving.com/',
  ];
}

?>