<?php

namespace WellnessLiving\Config;

/**
 * @deprecated Use direct inheritance from the {@link \WellnessLiving\Config\WlConfigAbstract} class and
 * {@link \WellnessLiving\Config\WlConfigAbstract::create()} method to create a configuration object.
 */
class WlConfigStaging extends WlConfigAbstract
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
  public const URL='https://staging.wellnessliving.com/';
}

?>