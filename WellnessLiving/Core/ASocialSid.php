<?php

namespace WellnessLiving\Core;

/**
 * A list of supported social networks.
 *
 * Last used ID: 3.
 */
abstract class ASocialSid
{
  /**
   * Facebook social network.
   *
   * @link https://www.facebook.com
   */
  const FACEBOOK = 1;

  /**
   * Google Plus social network.
   *
   * @deprecated Not supported.
   * @link https://plus.google.com
   */
  const GOOGLE = 2;

  /**
   * Twitter social network.
   *
   * @link https://twitter.com
   */
  const TWITTER = 3;
}

?>