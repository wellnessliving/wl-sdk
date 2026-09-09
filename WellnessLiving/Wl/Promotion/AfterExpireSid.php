<?php

namespace WellnessLiving\Wl\Promotion;

/**
 * List of actions that can be done when promotion expires.
 *
 * Last used ID: 5
 */
class AfterExpireSid
{
  /**
   * After expiration promotion will be converted.
   *
   * @title Convert
   */
  const CONVERT = 3;

  /**
   * After expiration does nothing.
   *
   * @title Do nothing
   */
  const NONE = 1;

  /**
   * After expiration package will be auto-renewed.
   *
   * @title Auto-renew and do not cancel current package contents
   */
  const PACKAGE_RENEW = 4;

  /**
   * After expiration package will be auto-renewed and current contents will be cancelled.
   *
   * @title Auto-renew and cancel current package contents
   */
  const PACKAGE_RENEW_CANCEL = 5;

  /**
   * After expiration promotion will be auto-renewed.
   *
   * @title Auto-renew
   */
  const RENEW = 2;
}

?>