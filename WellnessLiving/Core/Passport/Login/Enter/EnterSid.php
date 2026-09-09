<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

/**
 * Ways of authorization for user.
 *
 * Last ID: 5.
 */
class EnterSid
{
  /**
   * Apple account.
   */
  const APPLE = 3;

  /**
   * Facebook account.
   */
  const FACEBOOK = 1;

  /**
   * Google account.
   */
  const GOOGLE = 5;

  /**
   * Native tools of core.
   */
  const LOCAL = 2;

  /**
   * Microsoft account.
   */
  const MICROSOFT = 4;
}

?>