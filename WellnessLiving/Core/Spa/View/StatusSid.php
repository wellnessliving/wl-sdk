<?php

namespace WellnessLiving\Core\Spa\View;

/**
 * Statuses of SPA views.
 */
class StatusSid
{
  /**
   * View is currently shown.
   */
  const ACTIVE = 1;

  /**
   * View is just created, and not yet shown.
   */
  const CREATE = 2;

  /**
   * View is destroyed.
   */
  const DESTROY = 5;

  /**
   * View is being hidden.
   *
   * Animation is active in this status.
   */
  const HIDE = 3;

  /**
   * View is rendered, but it is currently inactive (it is placed in the registry and may be activated later).
   */
  const INACTIVE = 7;

  /**
   * View is currently active, but it is hidden due to that its child is now shown.
   */
  const INVISIBLE = 6;

  /**
   * View is being shown.
   *
   * Animation is active in this status.
   */
  const SHOW = 4;
}

?>