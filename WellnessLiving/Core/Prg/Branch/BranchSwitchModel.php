<?php

namespace WellnessLiving\Core\Prg\Branch;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Switching repositories in local directories.
 *
 * @method WlModelRequest post()
 */
class BranchSwitchModel extends WlModelAbstract
{
  /**
   * List directories for switch. One element contains: 
   *
   * <dl>
   *   <dt>string `s_path_local`</dt>
   *   <dd>Local directory which will be switched.</dd>
   * 
   *   <dt>string `url_server`</dt>
   *   <dd>Remote repository URI which will be installed.</dd>
   * </dl>
   * @post post
   * @var string[][]
   */
  public $a_switch = [];
}

?>