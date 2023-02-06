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
  protected static $COOKIE_PERSISTENT=[
    WlRegionSid::AP_SOUTHEAST_2 => 'ap',
    WlRegionSid::US_EAST_1 => 'p',
  ];

  /**
   * @inheritDoc
   */
  protected static $COOKIE_TRANSIENT=[
    WlRegionSid::AP_SOUTHEAST_2 => 'at',
    WlRegionSid::US_EAST_1 => 't',
  ];

  /**
   * @inheritDoc
   */
  protected static $REGION_URL = [
    WlRegionSid::AP_SOUTHEAST_2 => 'https://au.wellnessliving.com/',
    WlRegionSid::US_EAST_1 => 'https://us.wellnessliving.com/',
  ];
}

?>