<?php

namespace WellnessLiving\Wl\Notification\Banner;

/**
 * Notification banner type.
 *
 * Last used ID: 5.
 */
class BannerTypeSid
{
  /**
   * Manual notifications which are pushed to the Alert Center for all staff within a business.
   */
  const ALERT = 5;

  /**
   * Regular banner created by admin.
   */
  const NORMAL = 1;

  /**
   * System banner indicating on Partner Programs.
   */
  const PARTNER_PROGRAM = 4;

  /**
   * System banner indicating business being in QUICK Setup mode.
   */
  const QUICK_SETUP = 2;

  /**
   * System banner indicating business when automatically upgrade Zoom Plan.
   */
  const ZOOM_UPGRADE = 3;
}

?>