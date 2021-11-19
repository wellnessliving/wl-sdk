<?php

namespace WlSdkExample;

use WellnessLiving\Config\WlConfigStaging;

/**
 * The example config class.
 */
class ExampleConfig extends WlConfigStaging
{
  /**
   * @inheritDoc
   */
  public const AUTHORIZE_CODE='/** Put your authorization code here */';

  /**
   * @inheritDoc
   */
  public const AUTHORIZE_ID='/** Put your application ID here */';
}

?>