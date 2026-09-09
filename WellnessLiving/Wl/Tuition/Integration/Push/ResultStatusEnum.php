<?php

namespace WellnessLiving\Wl\Tuition\Integration\Push;

/**
 * List of statuses for tuition pushes.
 */
class ResultStatusEnum
{
  /**
   * Tuition plan was created after push.
   */
  const CREATED = 1;

  /**
   * Error during push.
   */
  const ERROR = 3;

  /**
   * Undefined error.
   */
  const UNDEFINED = 4;

  /**
   * Tuition plan was updated after push.
   */
  const UPDATED = 2;
}

?>