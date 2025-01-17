<?php

namespace WellnessLiving\Wl\Classes\Period\Modify;

use WellnessLiving\WlModelAbstract;
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
     *
     *
     * @get get
     * @post get,result
     * @var string
     */
  public $s_id = '';
}

?>