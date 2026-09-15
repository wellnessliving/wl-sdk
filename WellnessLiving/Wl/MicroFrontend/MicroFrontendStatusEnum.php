<?php

namespace WellnessLiving\Wl\MicroFrontend;

/**
 * Possible statuses that control access to a micro-frontend insertion point.
 */
class MicroFrontendStatusEnum
{
  /**/
  const BUSINESS_LIST = 1;

  /**
   * Not available for any business.
   */
  const DISABLED = 2;

  /**
   * Available for all businesses.
   */
  const PUBLIC_AVAILABLE = 3;
}

?>