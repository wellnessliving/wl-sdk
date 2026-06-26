<?php

namespace WellnessLiving\Wl\Member\Group;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to check if quick group of clients is empty.
 *
 * @method WlModelRequest get() Gets users in the quick group.
 */
class GroupTemporaryModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if there are no clients is the quick group; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_empty;
}

?>