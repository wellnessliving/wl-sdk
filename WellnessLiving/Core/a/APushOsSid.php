<?php

namespace WellnessLiving\Core\a;

/**
 * The operating system of a device that receives push notifications: an application sends its string ID when it
 * registers the device.
 */
abstract class APushOsSid
{
  /**
   * A device with Android.
   */
  const ANDROID = 1;

  /**
   * An Apple device with iOS.
   */
  const IOS = 2;
}

?>