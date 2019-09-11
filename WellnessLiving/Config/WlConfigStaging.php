<?php

namespace WellnessLiving\Config;

class WlConfigStaging extends WlConfigAbstract
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
  const URL='https://staging.wellnessliving.com/';
}

?>