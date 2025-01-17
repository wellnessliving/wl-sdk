<?php

namespace WellnessLiving\Core\Request;

use WellnessLiving\WlModelAbstract;

/**
 * Example API endpoint.
 *
 * Designed to debug issues with API.
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