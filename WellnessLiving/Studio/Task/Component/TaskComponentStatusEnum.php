<?php

namespace WellnessLiving\Studio\Task\Component;

/**
 * Contain types of importance components.
 *
 * @method static TaskComponentStatusEnum|null classEid(string $s_class, ?string $s_prefix = null)
 * @method static TaskComponentStatusEnum|null constantEid(string $s_constant)
 * @method static TaskComponentStatusEnum|null idEid(int $id)
 * @method static TaskComponentStatusEnum|null sidEid(string $sid)
 * @method static int defaultId()
 * @method static int eidId(self $eid)
 */
class TaskComponentStatusEnum
{
  /**
   * It's critical importance of the component.
   */
  const CRITICAL = 4;

  /**
   * It's high importance of the component.
   */
  const HIGH = 3;

  /**
   * It's low importance of the component.
   */
  const LOW = 1;

  /**
   * It's medium importance of the component.
   */
  const MEDIUM = 2;
}

?>