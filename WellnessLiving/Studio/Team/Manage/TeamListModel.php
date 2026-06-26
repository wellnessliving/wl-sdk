<?php

namespace WellnessLiving\Studio\Team\Manage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of teams for editor.
 *
 * @method WlModelRequest get()
 */
class TeamListModel extends WlModelAbstract
{
  /**
   * A list of team.
   *
   * @get result
   * @var array[]|null
   */
  public $a_list;
}

?>