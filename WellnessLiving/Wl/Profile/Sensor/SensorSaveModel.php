<?php

namespace WellnessLiving\Wl\Profile\Sensor;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for adding, editing, deleting sensors.
 *
 * @method WlModelRequest delete() Deletes sensor.
 * @method WlModelRequest post() Saves sensor info while adding and editing sensors.  If deleting sensor, else sensor row data for template:   <dl>     <dt>array <var>a_class_menu</var></dt>     <dd>Menu data with structure:       <dl>         <dt>string <var>s_id</var></dt>         <dd>ID of the current button.</dd>         <dt>string <var>s_class</var></dt>         <dd>Class for current button.</dd>         <dt>string <var>s_onclick</var></dt>         <dd>Code to execute on button click.</dd>         <dt>string <var>s_title</var></dt>         <dd>Button title.</dd>       </dl>     </dd>     <dt>string <var>s_sensor</var></dt>     <dd>Sensor id.</dd>     <dt>string <var>s_id_sensor</var></dt>     <dd>Id name for sensor menu button.</dd>     <dt>string <var>text_name</var></dt>     <dd>Sensor name.</dd>   </dl>
 */
class SensorSaveModel extends WlModelAbstract
{
  /**
   * Page number.
   *
   * @post result
   * @var int
   */
  public $i_page;

  /**
   * @post post
   * @var int
   */
  public $id_sensor_type;

  /**
   * <tt>true</tt> if editing sensor, <tt>false</tt> if adding.
   *
   * @post post
   * @var bool
   */
  public $is_edit;

  /**
   * Business key.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Old sensor ID before editing.
   *
   * @post post
   * @var string
   */
  public $s_old_sensor;

  /**
   * Sensor ID.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $s_sensor;

  /**
   * Sensor name.
   *
   * @post post
   * @var string
   */
  public $text_name = '';

  /**
   * User key.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>