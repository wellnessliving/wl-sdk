<?php

namespace WellnessLiving\Studio\Task\Branch;

/**
 * Stand statuses.
 *
 * Last used ID: 4.
 */
class StandStatusSid
{
  /**
   * Stand is in creation process.
   *
   * The stand in this status may be transitioned to:
   * * * {@link StandStatusSid::READY} in a case when creation is successfully completed.
   * * * {@link StandStatusSid::ERROR} in a case when creation was failed with error.
 */
  const CREATION = 1;

  /**
   * Stand is in deletion process.
   *
   * The stand in this status may be transitioned to:
   * * * {@link StandStatusSid::NOT_EXIST} in a case when deletion is successfully completed.
   * * * {@link StandStatusSid::ERROR} in a case when deletion was failed with error.
   */
  const DELETION = 3;

  /**
   * Creating or deleting a stand resulted in an error
   *
   * The stand in this status may be transitioned to:
   * * * {@link StandStatusSid::NOT_EXIST} if the creation or deletion process has not been completed, we must delete the stand.
   */
  const ERROR = 4;

  /**
   * Stand has not been created.
   *
   * The stand in this status may be transitioned only to {@link StandStatusSid::CREATION}.
   */
  const NOT_EXIST = 0;

  /**
   * Stand was created and ready for use.
   *
   * The stand in this status may be transitioned only to {@link StandStatusSid::DELETION}.
   */
  const READY = 2;
}

?>