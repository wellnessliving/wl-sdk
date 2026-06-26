<?php

namespace WellnessLiving\Studio\Tv\Example;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Example get TV page classes list for test dynamically changing the list of pages of the view class.
 *
 * @method WlModelRequest get() Get a key list of view class that are available to this group.
 */
class ClassPageListGetModel extends WlModelAbstract
{
  /**
   * A key page list of view class that are available to current group.
   *
   * @get result
   * @var string[]
   */
  public $a_key = [];

  /**
   * Group ID.
   *
   * @get get
   * @var int
   */
  public $id_group = 0;

  /**
   * Authorization password.
   *
   * @get get
   * @var string
   */
  public $s_password = '';
}

?>