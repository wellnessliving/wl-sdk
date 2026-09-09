<?php

namespace WellnessLiving\Core\Watch;

/**
 * A list of statuses of a watch.
 */
class WatchStatusSid
{
  /**/
  const ALARM = 4;

  /**
   * Resource value has recently been in {@link WatchStatusSid::OK} status, there occurred values in
   */
  const FAILING = 1;

  /**/
  const OK = 3;

  /**
   * Resource value has recently been in {@link WatchStatusSid::ALARM} status, there occurred values in
   */
  const RESTORING = 2;
}

?>