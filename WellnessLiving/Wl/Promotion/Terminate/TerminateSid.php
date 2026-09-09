<?php

namespace WellnessLiving\Wl\Promotion\Terminate;

/**
 * List of promotion termination options.
 *
 * Last used ID: 3.
 */
class TerminateSid
{
  /**
   * Do not terminate promotion.
   *
   * @title Do not terminate
   */
  const NOT_TERMINATE = 1;

  /**
   * Terminate promotion.
   *
   * @title Terminate
   */
  const TERMINATE = 2;

  /**
   * Terminate and convert promotion.
   *
   * @title Terminate and convert
   */
  const TERMINATE_CONVERT = 3;
}

?>