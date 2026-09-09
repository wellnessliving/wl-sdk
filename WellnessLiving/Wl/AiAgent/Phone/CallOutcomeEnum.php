<?php

namespace WellnessLiving\Wl\AiAgent\Phone;

/**
 * List of outcomes of a CAASI Phone Agent call.
 */
class CallOutcomeEnum
{
  /**
   * The caller requested a callback from staff.
   *
   * @title Callback Requested
   */
  const CALLBACK_REQUESTED = 3;

  /**
   * The call was resolved by CAASI without staff involvement.
   *
   * @title Resolved
   */
  const RESOLVED = 1;

  /**
   * The call was transferred to a live staff member.
   *
   * @title Transferred
   */
  const TRANSFERRED = 2;
}

?>