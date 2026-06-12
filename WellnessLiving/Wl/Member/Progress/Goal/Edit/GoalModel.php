<?php

namespace WellnessLiving\Wl\Member\Progress\Goal\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Member\Progress\Field\MeasurementSid;
use WellnessLiving\Wl\Member\Progress\Field\ProgressFieldSid;
use WellnessLiving\Wl\Member\Progress\Field\TypeSid;

/**
 * Progress goal api.
 */
class GoalModel extends WlModelAbstract
{
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
  public $a_field_goal;

  /**
   * Field log data.
   *
   * @get result
   * @post result
   * @var array[]
   */
<dl>
  <dt>int `id_field`</dt>
  <dd>Field ID. One of the {@link ProgressFieldSid}.</dd>

  <dt>int `id_measurement_unit`</dt>
  <dd>Field measurement unit ID. One of the {@link MeasurementSid} constants.</dd>

  <dt>int `id_type`</dt>
  <dd>Field type ID. One of the {@link TypeSid} constants.</dd>

  <dt>string `k_field`</dt>
  <dd>Field key. 

  <dt>mixed `x_value`</dt>
  <dd>Progress field log value.</dd>

  <dt>string `text_name`</dt>
  <dd>Translated field name.</dd>
</dl>
  public $a_field_list;

  /**
   * How we want to see this page. As a staff or as a user.
   *
   * @get result
   * @var bool
   */
  public $is_staff;

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