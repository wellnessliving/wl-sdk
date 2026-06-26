<?php

namespace WellnessLiving\Studio\Sprint\Promoting;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Executes specified script to promote sprint.
 *
 * @method WlModelRequest post()
 */
class ExecuteScriptModel extends WlModelAbstract
{
  /**
   * Microservice key.
   *
   * `null` if the value is not set
   *
   * @post get
   * @var string|null
   */
  public $k_microservice = null;

  /**
   * Name of the script to execute.
   *
   * Scripts are defined by <tt>a_script</tt> variable in
   * <tt>namespace.Studio/Sprint/Promoting/PromotingConfig.json</tt>.
   *
   * @post post
   * @var string
   */
  public $s_script;
}

?>