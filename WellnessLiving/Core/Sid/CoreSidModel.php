<?php

namespace WellnessLiving\Core\Sid;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get list of additional information about IDs from any Sid class.
 *
 * This API can be used itself - in this case you need to send correct name of the class.
 * Or you can use one of the inherited classes with predefined class name, if it exists.
 *
 * @method WlModelRequest get() Returns the list of all items for the given Sid class.  Populates enumeration dropdowns and lookup tables on the frontend. <i>   Given any class that extends {@link \Core\Sid\CoreSid}, returns every defined constant with its numeric ID,   string identifier, and human-readable title so the client does not need to hard-code enum values. </i>
 */
class CoreSidModel extends WlModelAbstract
{
  /**
   * List of items. Keys are IDs, values are arrays with additional information:
   *
   * <dl>
   *   <dt>int `sid`</dt>
   *   <dd>String ID.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the ID.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_list;

  /**
   * Name of the Sid class to get list from.
   *
   * Should be a fully qualified class name.
   *
   * @get get
   * @var string
   */
  public $s_class_name = '';
}

?>