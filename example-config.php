<?php

namespace WlSdkExample;

use WellnessLiving\Config\WlConfigDeveloper;

/**
 * The example config class.
 */
class ExampleConfig extends WlConfigDeveloper
{
  /**
   * @inheritDoc
   */
  const AUTHORIZE_CODE='/** Put your authorization code here */';

  /**
   * @inheritDoc
   */
  const AUTHORIZE_ID='/** Put your application ID here */';
}

?>