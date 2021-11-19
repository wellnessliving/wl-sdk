<?php

namespace WellnessLiving\Config;

use WellnessLiving\WlRegionSid;

/**
 * Base class for all testing configurations.
 */
abstract class WlConfigStaging extends WlConfigAbstract
{
  /**
   * @inheritDoc
   */
  const COOKIE_PERSISTENT='sp';

  /**
   * @inheritDoc
   */
  const COOKIE_TRANSIENT='st';

  /**
   * @inheritDoc
   */
  protected static $REGION_URL = [
    WlRegionSid::AP_SOUTHEAST_2 => 'https://demo.wellnessliving.com/',
    WlRegionSid::US_EAST_1 => 'https://staging.wellnessliving.com/',
  ];
}

?>