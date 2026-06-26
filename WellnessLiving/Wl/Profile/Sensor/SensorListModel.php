<?php

namespace WellnessLiving\Wl\Profile\Sensor;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for getting sensors list data.
 *
 * @method WlModelRequest get() Returns data for given page to show in view.
 */
class SensorListModel extends WlModelAbstract
{
  /**
   * <tt>false</tt> if no pages present or pagination data with structure:
   *
   * <dl>
   *   <dt>int `page`</dt>
   *   <dd>Page number.</dd>
   * 
   *   <dt>bool `is_selected`</dt>
   *   <dd>Whether the page is current.</dd>
   * 
   *   <dt>bool `is_previous`</dt>
   *   <dd>Whether the page is previous.</dd>
   * 
   *   <dt>bool `is_next`</dt>
   *   <dd>Whether the page is next.</dd>
   * 
   *   <dt>string `onclick`</dt>
   *   <dd>Code to execute after button is clicked.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_page;

  /**
   * Sensors data with structure:
   *
   * <dl>
   *   <dt>array `a_class_menu`</dt>
   *   <dd>
   *     Menu data with structure:
   *     <dl>
   *       <dt>string `s_id`</dt>
   *       <dd>ID of the current button.</dd>
   * 
   *       <dt>string `s_class`</dt>
   *       <dd>Class for current button.</dd>
   * 
   *       <dt>string `s_onclick`</dt>
   *       <dd>Code to execute on button click.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>Button title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `s_sensor`</dt>
   *   <dd>Sensor id.</dd>
   * 
   *   <dt>string `s_id_sensor`</dt>
   *   <dd>Id name for sensor menu button.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Sensor name.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_sensor;

  /**
   * Current page number.
   *
   * @get result
   * @var int
   */
  public $i_current_page;

  /**
   * Page to display.
   *
   * @get get
   * @var int
   */
  public $i_page = 0;

  /**
   * Business key.
   *
   * @get get,result
   * @var string
   */
  public $k_business = '0';

  /**
   * User key.
   *
   * @get get,result
   * @var string
   */
  public $uid = '0';
}

?>