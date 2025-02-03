<?php

namespace WellnessLiving\Wl\Member\Progress\Log\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Member\Progress\Field\ProgressFieldSid;

/**
 * Progress log api.
 */
class LogModel extends WlModelAbstract
{
  /**
   * Field log data.
   *
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