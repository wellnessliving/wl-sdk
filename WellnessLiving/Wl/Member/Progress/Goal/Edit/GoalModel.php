<?php

namespace WellnessLiving\Wl\Member\Progress\Goal\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Member\Progress\Field\MeasurementSid;
use WellnessLiving\Wl\Member\Progress\Field\ProgressFieldSid;
use WellnessLiving\Wl\Member\Progress\Field\TypeSid;

/**
 * Progress goal api.
 *
 * @method WlModelRequest get() Returns progress goal log data.  Loads the current goal values for all configured progress fields for the specified user and business, and also returns whether the current viewer is a staff member.
 * @method WlModelRequest post() Saves progress goal fields log.  Validates and persists the goal values provided in `$a_field_goal` for the specified user and business, then returns the updated field list in `$a_field_list`.
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
   *   <dd>Field key. </dd>
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