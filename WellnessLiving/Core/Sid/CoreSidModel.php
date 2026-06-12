<?php

namespace WellnessLiving\Core\Sid;

use WellnessLiving\WlModelAbstract;

/**
 * API to get list of additional information about IDs from any Sid class.
 *
 * This API can be used itself - in this case you need to send correct name of the class.
 * Or you can use one of the inherited classes with predefined class name, if it exists.
 */
class CoreSidModel extends WlModelAbstract
{
  /**
   * List of items. Keys are IDs, values are arrays with additional information:
   *
   * @get result
   * @var array
   */
  public $a_list;

  /**
   * Name of the Sid class to get list from.
   *
   * @get get
   * @var string
   */
  public $s_class_name = '';
}

?>