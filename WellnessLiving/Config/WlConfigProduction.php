<?php

namespace WellnessLiving\Config;

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