<?php

namespace WellnessLiving\Wl\Member\Progress\Log\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Member\Progress\Field\MeasurementSid;
use WellnessLiving\Wl\Member\Progress\Field\ProgressFieldSid;
use WellnessLiving\Wl\Member\Progress\Field\TypeSid;

/**
 * Progress log api.
 */
class LogModel extends WlModelAbstract
{
  /**
   * Field log data.
   *
   * <dl>
   *   <dt>int `id_field`</dt>
   *   <dd>Field ID. One of the {@link ProgressFieldSid}.</dd>
   * 
   *   <dt>int `id_measurement_unit`</dt>
   *   <dd>Field measurement unit ID. One of the {@link MeasurementSid} constants.</dd>
   * 
   *   <dt>int `id_type`</dt>
   *   <dd>Field type ID. One of the {@link TypeSid} constants.</dd>
   * 
   *   <dt>string `k_field`</dt>
   *   <dd>Field key. 
   * 
   *   <dt>mixed `x_value`</dt>
   *   <dd>Progress field log value.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Translated field name.</dd>
   * </dl>
   * @get result
   * @post result
   * @var array[]
   */
  public $a_field_list;

  /**
   * List of fields.
   *
   * Keys are field IDs ({@link ProgressFieldSid} constants).
   * Values are new field values.
   * Structure of value completely defined by individual fields.
   *
   * @post post
   * @var array[]
   */
  public $a_field_log;

  /**
   * Progress log local date.
   *
   * If <tt>null</tt> use the current date.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date = null;

  /**
   * Last local date when the user entered progress values. <tt>null</tt> if the user had not entered progress data before the {@link LogModel::$dt_date} date.
   *
   * @get result
   * @var string|null
   */
  public $dt_last;

  /**
   * How we want to see this page. As a staff or as a user.
   *
   * @get result
   * @var bool
   */
  public $is_staff;

  /**
   * Whether field is only weight should be updated.
   *
   * @post post
   * @var bool
   */
  public $is_weight_only = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = null;

  /**
   * User key.
   *
   * @get get
   * @post get
   * @var null|string
   */
  public $uid = null;
}

?>