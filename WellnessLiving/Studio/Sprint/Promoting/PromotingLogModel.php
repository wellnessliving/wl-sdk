<?php

namespace WellnessLiving\Studio\Sprint\Promoting;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows retrieval of promoting logs contents.
 *
 * @method WlModelRequest get()
 */
class PromotingLogModel extends WlModelAbstract
{
  /**
   * Contents of the logs retrieved.
   *
   * @get result
   * @var array[]
   */
  public $a_log;

  /**
   * Microservice key.
   *
   * `null` if the value is not set
   *
   * @get get
   * @var string|null
   */
  public $k_microservice = null;
}

?>