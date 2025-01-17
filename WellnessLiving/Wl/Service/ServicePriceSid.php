<?php

namespace WellnessLiving\Wl\Service;

/**
 * A list of service price types.
 */
abstract class ServicePriceSid
{
  /**
     * Fixed price.
     */
  const FIXED = 1;

  /**
     * No need to pay.
     */
  const FREE = 2;

  /**
     * Hide price.
     */
  const HIDE = 4;

  /**
     * Various price.
     */
  const VARIES = 3;
}

?>