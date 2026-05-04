<?php

namespace WellnessLiving\Wl\Classes\Period\Modify;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\WlClassModifyActionSid;
use WellnessLiving\Wl\WlClassModifyModeSid;
use WellnessLiving\Wl\WlClassModifyStepSid;

/**
 * Modifies the master model.
 */
class ModifyModel extends WlModelAbstract
{
  /**
   * Step information, depending on the steps.
   *
   * @get result
   * @var array
   */
  public $a_get;

  /**
   * The list of data to save.
   *
   * Data depends on current {@link ModifyModel::$id_step}:
   * <dl>
   *   <dt>bool `is_forward`</dt>
   *   <dd>Modify all future sessions. Used in {@link WlClassModifyStepSid::PERIOD}.</dd>
   *   <dt>string[] `a_period`</dt>
   *   <dd> Used in {@link WlClassModifyStepSid::ITEM}.</dd>
   *   <dt>array `a_edit`</dt>
   *   <dd>Edited fields flags. Used in {@link WlClassModifyStepSid::FORM}.</dd>
   *   <dt>array[] `a_staff`</dt>
   *   <dd>Selected instructors. Used in {@link WlClassModifyStepSid::FORM}:<dl>
   *     <dt>string `k_staff`</dt>
   *     <dd>@</dd>
   *     <dt>string `uid_staff`</dt>
   *     <dd> Optional.</dd>
   *     <dt>string `k_staff_pay`</dt>
   *
   *   </dl></dd>
   *   <dt>bool `is_inform_mail`</dt>
   *   <dd>Send email notification to clients. Used in {@link WlClassModifyStepSid::CLIENT}.</dd>
   *   <dt>bool `is_inform_sms`</dt>
   *   <dd>Send SMS notification to clients. Used in {@link WlClassModifyStepSid::CLIENT}.</dd>
   *   <dt>bool `is_inform_mail_staff`</dt>
   *   <dd>Send email notification to staff. Used in {@link WlClassModifyStepSid::CLIENT}.</dd>
   *   <dt>bool `is_inform_sms_staff`</dt>
   *   <dd>Send SMS notification to staff. Used in {@link WlClassModifyStepSid::CLIENT}.</dd>
   *   <dt>bool `is_cancel_resource`</dt>
   *   <dd>Cancel resources for modified classes. Used in {@link WlClassModifyStepSid::CLIENT}.</dd>
   *   <dt>bool `show_canceled_class`</dt>
   *   <dd>Show canceled classes in the result list. Used in {@link WlClassModifyStepSid::CONFIRM}.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_set = [];

  /**
   * The end date, returned in MySQL format and the local time.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_end = '';

  /**
   * The start date, returned in MySQL format and the local time.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_start = '';

  /**
   * The class modify step type. One of the {@link WlClassModifyActionSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_class_modify_action = 0;

  /**
   * The modify mode type. One of the {@link WlClassModifyModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_class_modify_mode = 0;

  /**
   * The mode type. One of the {@link ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The class modify action type. One of the {@link WlClassModifyModeSid} constants.
   *
   * @get get
   * @post get,result
   * @var int
   */
  public $id_step = 0;

  /**
   * The step direction.
   *
   * `true` - step forward.
   *
   * `false` - step back.
   *
   * After each step, this variable sets to the default position.
   * By default, the step direction is forward.
   *
   * @get get
   * @post get,result
   * @var bool|null
   */
  public $is_back = false;

  /**
   * The business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The class ID.
   *
   * @post result
   * @var string|null
   */
  public $k_class;

  /**
   * The class period key.
   *
   * This will be empty if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '';

  /**
   * The unique hash string.
   *
   * @get get
   * @post get,result
   * @var string
   */
  public $s_id = '';
}

?>