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
   * *
   * @get get
   * @var string
   */
  public $s_class_name = '';
}

?>