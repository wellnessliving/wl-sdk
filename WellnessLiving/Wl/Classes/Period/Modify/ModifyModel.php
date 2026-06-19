<?php

namespace WellnessLiving\Wl\Classes\Period\Modify;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\WlClassModifyActionSid;
use WellnessLiving\Wl\WlClassModifyModeSid;

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
   *
   * <dl>
   *   <dt>bool `is_forward`</dt>
   *   <dd>Modify all future sessions.</dd>
   * 
   *   <dt>string[] `a_period`</dt>
   *
   * 
   *   <dt>string[] `a_edit`</dt>
   *   <dd>
   *     Edited fields flags.
   * Keys are field names (e.g. `a_staff`, `dt_time`); each value is `'1'` to indicate the field was changed.
   *   </dd>
   * 
   *   <dt>array[] `a_staff`</dt>
   *   <dd>
   *     Selected instructors. Used in {@link RsClassModifyStepSid::FORM}:
   *     <dl>
   *       <dt>string `k_staff`</dt>
   *       <dd>@deprecated Staff key. 
   * 
   *       <dt>string `uid_staff`</dt>
   *       <dd>Staff user key. onal.</dd>
   * 
   *       <dt>string `k_staff_pay`</dt>
   *       <dd>Staff pay rate ID. 
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `is_inform_mail`</dt>
   *   <dd>Send email notification to clients.</dd>
   * 
   *   <dt>bool `is_inform_sms`</dt>
   *   <dd>Send SMS notification to clients.</dd>
   * 
   *   <dt>bool `is_inform_mail_staff`</dt>
   *   <dd>Send email notification to staff.</dd>
   * 
   *   <dt>bool `is_inform_sms_staff`</dt>
   *   <dd>Send SMS notification to staff.</dd>
   * 
   *   <dt>bool `is_cancel_resource`</dt>
   *   <dd>Cancel resources for modified classes.</dd>
   * 
   *   <dt>bool `show_canceled_class`</dt>
   *   <dd>Show canceled classes in the result list.</dd>
   * </dl>
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
   * 
   * @get get
   * @post get,result
   * @var string
   */
  public $s_id = '';
}

?>