<?php

namespace WellnessLiving\Wl\Location\Facility;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlFacilitySid;

/**
 * API to get list of additional information about IDs from {@link WlFacilitySid} class.
 *
 * Property {@link FacilitySidModel::$s_class_name} can be left empty in this class. It will use predefined class name.
 */
class FacilitySidModel extends WlModelAbstract
{
  /**
   * List of items. Keys are IDs, values are arrays with additional information:
   *
   * <dl>
   *     <dt>int <var>sid</var></dt>
   *     <dd>String ID.</dd>
   *     <dt>string <var>text_title</var></dt>
   *     <dd>Title of the ID.</dd>
   * </dl>
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