<?php

namespace WellnessLiving\Studio\Deploy\Compile\Status;

/**
 * A list of statuses of compilation servers.
 */
abstract class DeployCompileStatusSid
{
  /**
   * Deployment server is stopped and can not be launched automatically.
   *
   * Server can only be transitioned from this status manually.
   *
   * Server can be transitioned to:
   * * {@link DeployCompileStatusSid::STARTING}
   * * {@link DeployCompileStatusSid::STOPPING}
   */
  const DISABLE = 5;

  /**
   * Deployment server is running.
   *
   * Server can be transitioned to:
   * * {@link DeployCompileStatusSid::DISABLE} - manually.
   * * {@link DeployCompileStatusSid::STARTING} - in a case of health check failure,
   *
   * * {@link DeployCompileStatusSid::STOPPING} by {@link \Studio\Deploy\Compile\Cron::cronRunStopping()}.
   */
  const RUN = 1;

  /**
   * Deployment server is being initialized.
   *
   * Server can be transitioned to:
   * * {@link DeployCompileStatusSid::DISABLE}
   * * {@link DeployCompileStatusSid::RUN}
   */
  const STARTING = 2;

  /**
   * Deployment server is stopped.
   *
   * Server can be transitioned to:
   * * {@link DeployCompileStatusSid::DISABLE}
   * * {@link DeployCompileStatusSid::STARTING} (by {@link \Studio\Deploy\Compile\Ajax::statusChange()},
   *   by {@link \Studio\Deploy\Compile\Cron::cronStopStarting()}) or
   */
  const STOP = 3;

  /**
   * Deployment server is being stopped.
   *
   * Server can be transitioned to:
   * * {@link DeployCompileStatusSid::DISABLE}
   * * {@link DeployCompileStatusSid::STOP}
   */
  const STOPPING = 4;

  /**
   * Deployment server is temporarily unhealthy.
   *
   * Server can be transitioned to:
   * * {@link DeployCompileStatusSid::DISABLE}
   * * {@link DeployCompileStatusSid::RUN}
   * * {@link DeployCompileStatusSid::STOPPING}
   */
  const UNHEALTHY = 6;
}

?>