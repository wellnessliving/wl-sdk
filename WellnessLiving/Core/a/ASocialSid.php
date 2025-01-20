<?php

namespace WellnessLiving\Core\a;

/**
 * A list of supported social networks.
 *
 * Last used ID: 3.
 */
abstract class ASocialSid
{
  /**
   * @link https://www.facebook.com
   */
  const FACEBOOK = 1;

  /**
   * @deprecated Not supported.
   * @link https://plus.google.com
   */
  const GOOGLE = 2;

  /**
   * @link https://twitter.com
   */
  const TWITTER = 3;
}

?>