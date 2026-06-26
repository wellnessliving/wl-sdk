<?php

namespace WellnessLiving\Core\Request\Api\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of access groups for editor.
 *
 * @method WlModelRequest get()
 */
class GroupListModel extends WlModelAbstract
{
  /**
   * A list of access groups.
   *
   * <tt>null</tt> if is not initialized yet.
   *
   * @get result
   * @var array[]|null
   */
  public $a_list;
}

?>