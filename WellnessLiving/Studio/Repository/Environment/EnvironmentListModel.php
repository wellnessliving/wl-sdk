<?php

namespace WellnessLiving\Studio\Repository\Environment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of studio environment for editor.
 *
 * @method WlModelRequest get()
 */
class EnvironmentListModel extends WlModelAbstract
{
  /**
   * A list of studio environments.
   *
   * @get result
   * @var array[]
   */
  public $a_list;
}

?>