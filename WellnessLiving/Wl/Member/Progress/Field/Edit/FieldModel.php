<?php

namespace WellnessLiving\Wl\Member\Progress\Field\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Member\Progress\Field\MeasurementSid;
use WellnessLiving\Wl\Member\Progress\Field\ProgressFieldSid;
use WellnessLiving\Wl\Member\Progress\Field\TypeSid;

/**
 * Manages progress field data.
 */
class FieldModel extends WlModelAbstract
{
  /**
   * A list of field measurement. See {@link MeasurementSid}.
   *
   * @get result
   * @var array
   */
  public $a_measurement;

  /**
   * A list of field type. See {@link TypeSid}.
   *
   * @get result
   * @var array
   */
  public $a_type;

  /**
   * Field ID. One of the {@link ProgressFieldSid} constant.
   *
   * @get result
   * @var int|null
   */
  public $id_field;

  /**
   * Field measurement unit ID.
   *
   * One of the {@link MeasurementSid} constants.
   *
   * @get result
   * @post post
   * @var null|int
   */
  public $id_measurement_unit;

  /**
   * Field type ID.
   *
   * One of the {@link TypeSid} constants.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_type;

  /**
   * Whether field is active and should be displayed on page.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_active;

  /**
   * Whether this field is public. If this field is set to <tt>false</tt>, this field is not visible to clients.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_public;

  /**
   * Whether field value is required for clients.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_require;

  /**
   * Whether field value is required for staffs.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_require_staff;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Field key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_field;

  /**
   * Field title.
   * Only titles of the custom progress fields can be changed.
   *
   * <tt>null</tt> If default title should be used.
   *
   * @get result
   * @post post,result
   * @var string|null
   */
  public $text_title;
}

?>