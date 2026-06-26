<?php

namespace WellnessLiving\Studio\Sprint;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of studio sprint for editor.
 *
 * @method WlModelRequest get()
 */
class SprintListModel extends WlModelAbstract
{
  /**
   * A list of studio sprints.
   *
   * @get result
   * @var array
   */
  public $a_list = [];
}

?>