<?php

namespace WellnessLiving\Wl\Business\RegionTravel;

/**
 * A list of statuses of travelling steps.
 */
class TravelStepStatusSid
{
  /**
   * This step is now active.
   *
   * The step may be transitioned to the following status:
   *
   * * {@link TravelStepStatusSid::COMPLETE} when this step completes;
   * * {@link TravelStepStatusSid::FAILURE} in a case of failure.
   */
  const ACTIVE = 1;

  /**
   * This step is now completed.
   *
   * This is the final state.
   * Travelling steps can not be transitioned anywhere from this status.
   */
  const COMPLETE = 2;

  /**
   * This step has failed.
   *
   * Failed steps require manual intervention to continue.
   * Which specific intervention is required entirely depends on the step.
   *
   * The step may be transitioned to the following status:
   *
   * * {@link TravelStepStatusSid::ACTIVE} when this step continues execution;
   * * {@link TravelStepStatusSid::COMPLETE} if it is identified that this step has completed successfully.
   */
  const FAILURE = 3;

  /**
   * This step is scheduled and has not yet started.
   *
   * All steps are created in this status.
   *
   * The step may be transitioned to the following status:
   *
   * * {@link TravelStepStatusSid::ACTIVE} when this step starts;
   * * {@link TravelStepStatusSid::COMPLETE} when this step completes successfully;
   * * {@link TravelStepStatusSid::FAILURE} when this step stops due to a failure.
   */
  const SCHEDULED = 4;
}

?>