<?php

namespace WellnessLiving\Config;

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