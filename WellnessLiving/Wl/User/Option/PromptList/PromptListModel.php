<?php

namespace WellnessLiving\Wl\User\Option\PromptList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to set "checked" on confirmed prompt.
 *
 * @method WlModelRequest delete() Removes option value for specified user.
 * @method WlModelRequest post()
 */
class PromptListModel extends WlModelAbstract
{
  /**
   * Option ID.
   *
   * @delete get
   * @post get
   * @var int
   */
  public $id_option = null;

  /**
   * Option value.
   *
   * @post post
   * @var string
   */
  public $s_value = null;

  /**
   * User key for which option value is updated.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $uid = null;
}

?>