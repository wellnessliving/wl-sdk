<?php

namespace WellnessLiving\Core\Request;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlRegionSid;

/**
 * *How to use*
 *
 * Execute the following code snippet in the browser:
 * <tt>namespace.Core/Request/doc/request-forward-test.js</tt>
 *
 * @method WlModelRequest get() Forwards this API request to all datacenters.
 */
class RequestForwardModel extends WlModelAbstract
{
  /**
   * Copy of {@link RequestForwardModel::$s_forward}.
   *
   * Key is datacenter ID. One of {@link WlRegionSid} constants.
   *
   * Values are copies of {@link RequestForwardModel::$s_forward} as seen on that datacenter.
   * Value is not set if {@link RequestForwardModel::$s_forward} is `null`.
   *
   * @get result
   * @var string[]
   */
  public $a_forward = [];

  /**
   * A list of datacenters to which the request was forwarded.
   *
   * One element is region ID, one of {@link WlRegionSid} constants.
   *
   * @get result
   * @var int[]
   */
  public $a_region = [];

  /**
   * Keys users signed in.
   *
   * Key is datacenter ID. One of {@link WlRegionSid} constants.
   *
   * @get result
   * @var string[]
   */
  public $a_uid;

  /**
   * Example string which may be used to see if data is correctly forwarded.
   *
   * @get get
   * @var string|null
   */
  public $s_forward = null;
}

?>