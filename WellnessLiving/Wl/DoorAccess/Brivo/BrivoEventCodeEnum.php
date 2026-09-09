<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo;

/**
 * Brivo `AUDIT` door-access event codes.
 */
class BrivoEventCodeEnum
{
  /**
   * Door Closed. Access granted (after open).
   *
   * @title Door Closed
   */
  const DOOR_CLOSED = 5010;

  /**
   * Door Open. Access granted.
   *
   * @title Door Open
   */
  const DOOR_OPEN = 5009;
}

?>