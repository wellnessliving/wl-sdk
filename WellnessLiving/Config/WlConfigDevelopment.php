<?php

namespace WellnessLiving\Config;

/**
 * @deprecated Use direct inheritance from the {@link \WellnessLiving\Config\WlConfigAbstract} class and
 * {@link \WellnessLiving\Config\WlConfigAbstract::create()} method to create a configuration object.
 */
class WlConfigDevelopment extends WlConfigAbstract
{
  /**
   * @inheritDoc
   */
  public const COOKIE_PERSISTENT='dp';

  /**
   * @inheritDoc
   */
  public const COOKIE_TRANSIENT='dt';

  /**
   * @inheritDoc
   */
  public const URL='https://demo.wellnessliving.com/';
}

?>