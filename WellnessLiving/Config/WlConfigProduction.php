<?php

namespace WellnessLiving\Config;

use WellnessLiving\WlRegionSid;

/**
 * Base class for all production configurations.
 */
abstract class WlConfigProduction extends WlConfigAbstract
{
  /**
   * @inheritDoc
   */
  const COOKIE_PERSISTENT='p';

  /**
   * @inheritDoc
   */
  const COOKIE_TRANSIENT='t';

  /**
   * @inheritDoc
   */
  protected static $REGION_URL = [
    WlRegionSid::AP_SOUTHEAST_2 => 'https://au.wellnessliving.com/',
    WlRegionSid::US_EAST_1 => 'https://us.wellnessliving.com/',
  ];
}

?>