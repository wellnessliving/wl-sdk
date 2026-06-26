<?php

namespace WellnessLiving\Core\Request\Api\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to get data of the access groups.
 *
 * @method WlModelRequest get()
 */
class GroupModel extends WlModelAbstract
{
  /**
   * A group list. Where key is group key, value is the title of the group.
   * <tt>null</tt> if is not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_application_group;
}

?>