<?php

namespace WellnessLiving\Core\Quiz;

/**
 * List of response statuses.
 *
 * Last used ID: 5
 */
class ResponseStatusSid
{
  /**
   * Response is active.
   */
  const ACTIVE = 1;

  /**
   * Response is active and has amendments.
   */
  const ACTIVE_AMEND = 5;

  /**
   * Response in draft mode.
   */
  const DRAFT = 2;

  /**
   * Response in inactive.
   *
   * It's temporary status which used when response is saved during registration/booking/purchase process,
   */
  const INACTIVE = 3;

  /**
   * Response in inactive and in draft mode.
   *
   * It's temporary status which used when response is saved in draft mode during registration/booking/purchase process,
   */
  const INACTIVE_DRAFT = 4;
}

?>