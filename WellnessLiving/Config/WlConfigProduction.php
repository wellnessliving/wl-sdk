<?php

namespace WellnessLiving\Config;

/**
 * @deprecated Use direct inheritance from the {@link \WellnessLiving\Config\WlConfigAbstract} class and
 * {@link \WellnessLiving\Config\WlConfigAbstract::create()} method to create a configuration object.
 */
class WlConfigProduction extends WlConfigAbstract
{
  /**
   * @inheritDoc
   */
  public const COOKIE_PERSISTENT='p';

  /**
   * @inheritDoc
   */
  public const COOKIE_TRANSIENT='t';

  /**
   * @inheritDoc
   */
  public const URL='https://www.wellnessliving.com/';
}

?>