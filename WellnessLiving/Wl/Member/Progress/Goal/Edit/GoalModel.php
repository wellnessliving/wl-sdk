<?php

namespace WellnessLiving\Wl\Member\Progress\Goal\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Member\Progress\Field\ProgressFieldSid;

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