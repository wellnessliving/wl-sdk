<?php

namespace WellnessLiving\Core\Request;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Example API endpoint.
 *
 * Designed to debug issues with API.
 *
 * @method WlModelRequest get() Returns the example result for debugging.  A diagnostic endpoint used to verify that a given API connection is working correctly. Increments the input argument by one (confirming round-trip data flow), records a debug log entry with the current session and authentication context, and returns the log key so the caller can inspect it.
 */
class ExampleModel extends WlModelAbstract
{
  /**
   * Example argument.
   *
   * @get get
   * @var int
   */
  public $i_argument = 0;

  /**
   * Example result.
   *
   * @get result
   * @var int
   */
  public $i_result = 0;

  /**
   * Key of the log record written by the API controller.
   *
   * @get result
   * @var string
   */
  public $s_log = '';
}

?>