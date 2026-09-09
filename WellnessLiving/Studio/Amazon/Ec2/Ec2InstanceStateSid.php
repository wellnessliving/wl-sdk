<?php

namespace WellnessLiving\Studio\Amazon\Ec2;

/**
 * List of Amazon EC2 instance states.
 *
 * Last used: 8.
 */
class Ec2InstanceStateSid
{
  /**
   * The instance is running.
   */
  const ACTIVE = 3;

  /**
   * The instance is in a failed state.
   */
  const FAIL = 8;

  /**
   * The instance is running and initializing it.
   */
  const INITIALIZING = 2;

  /**
   * The instance is registered and is awaiting launch.
   */
  const PENDING = 1;

  /**
   * The instance is shutting down.
   */
  const SHUTTING_DOWN = 4;

  /**
   * The instance has been stopped.
   */
  const STOPPED = 6;

  /**
   * The instance is in the process of being stopped.
   */
  const STOPPING = 5;

  /**
   * The instance has been terminated.
   */
  const TERMINATED = 7;
}

?>