<?php

namespace WellnessLiving\Core\AI\LogTriage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks that Studio can connect to the monolith API.
 *
 * @method WlModelRequest get() Returns a fixed value used to verify the signed SDK connection.
 */
class ConnectionCheckModel extends WlModelAbstract
{
  /**
   * Connection check value.
   *
   * @get result
   * @var int
   */
  public $i_result = 0;
}

?>