<?php

namespace WellnessLiving\Core\Debug;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**/
class ErrorModel extends WlModelAbstract
{
  /**
   * List of errors.
   *
   * JSON-encoded array mary arrive as a `string`.
   *
   * @post post
   * @var array|string
   */
  public $a_error_list = [];
}

?>