<?php

namespace WellnessLiving\Studio\Personnel\DebugToken;

use WellnessLiving\WlModelAbstract;

/**
 * Allows checking the validity of a debug token.
 */
class DebugTokenServiceModel extends WlModelAbstract
{
  /**
   * Debug token to check and if valid to return `true` otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $is_valid = false;

  /**
   * Debug token to check.
   *
   * @get get
   * @var string
   */
  public $s_token = '';
}

?>