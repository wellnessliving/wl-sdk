<?php

namespace WellnessLiving\Config;

use WellnessLiving\Wl\WlRegionSid;

/**
 * Base class for Studio configuration.
 */
abstract class WlConfigStudioAbstract extends WlConfigAbstract
{
  /**
   * @inheritDoc
   */
  protected static $COOKIE_PERSISTENT=[
    WlRegionSid::AP_SOUTHEAST_2 => 'p',
    WlRegionSid::US_EAST_1 => 'p',
  ];

  /**
   * @inheritDoc
   */
  protected static $COOKIE_TRANSIENT=[
    WlRegionSid::AP_SOUTHEAST_2 => 't',
    WlRegionSid::US_EAST_1 => 't',
  ];

  /**
   * @inheritDoc
   */
  protected static $REGION_URL = [
    WlRegionSid::AP_SOUTHEAST_2 => 'https://dev.1024.info/',
    WlRegionSid::US_EAST_1 => 'https://dev.1024.info/',
  ];
}

?>