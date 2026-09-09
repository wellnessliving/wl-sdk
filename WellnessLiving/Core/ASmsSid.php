<?php

namespace WellnessLiving\Core;

/**
 * A list of supported SMS gateways.
 */
abstract class ASmsSid
{
  /**
   * Gateway based on atompark.com
   *
   * @link http://www.atompark.com/
   */
  const ATOMPARK = 5;

  /**
   * Dummy gateway - do not really send any SMS messages.
   */
  const DUMMY = 1;

  /**
   * Gateway based on letsads.com
   *
   * @link http://letsads.com/
   */
  const LETSADS = 3;

  /**
   * Gateway based on twilio.com.
   *
   * @link http://twilio.com/
   */
  const TWILIO = 4;
}

?>