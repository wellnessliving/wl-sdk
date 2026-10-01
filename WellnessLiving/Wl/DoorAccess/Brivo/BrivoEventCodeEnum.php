<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo;

/**
 * Brivo `AUDIT` door-access event codes.
 */
class BrivoEventCodeEnum
{
  /**
   * Door was physically closed.
   *
   * @title Door Closed
   */
  const DOOR_CLOSED = 5010;

  /**
   * Door was physically opened.
   *
   * @title Door Open
   */
  const DOOR_OPEN = 5009;

  /**
   * Access was granted/the door was unlocked.
   *
   * @title Open
   */
  const OPEN = 2004;
}

?>