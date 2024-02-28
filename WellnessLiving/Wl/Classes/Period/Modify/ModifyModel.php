<?php

namespace WellnessLiving\Wl\Classes\Period\Modify;

use WellnessLiving\WlModelAbstract;

/**
 * Modify master model.
 */
class ModifyModel extends WlModelAbstract
{
  /**
   * Returns step information, depending on steps.
   *
   * @get result
   * @var array
   */
  public $a_get;

  /**
   * List of data to save.
   *
   * @post post
   * @var array
   */
  public $a_set = [];

  /**
   * End date in MySQL format in local time.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_end = '';

  /**
   * Start date in MySQL format in local time.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_start = '';

  /**
   * Class modify step type, one of {@link \WellnessLiving\Wl\WlClassModifyActionSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_class_modify_action = 0;

  /**
   * Modify mode type, one of {@link \WellnessLiving\Wl\WlClassModifyModeSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_class_modify_mode = 0;

  /**
   * Class modify action type, one of {@link \WellnessLiving\Wl\WlClassModifyStepSid}.
   *
   * @get get
   * @post get,result
   * @var int
   */
  public $id_step = 0;

  /**
   * Step direction.
   *
   * <tt>true</tt> step forward.
   * <tt>false</tt> step back.
   *
   * After each step this variable sets to default position.
   * By default, makes step forward.
   *
   * @get get
   * @post get,result
   * @var bool|null
   */
  public $is_back = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Class ID.
   *
   * @post result
   * @var string|null
   */
  public $k_class;

  /**
   * Class period key.
   *
   * Empty value means not set.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '';

  /**
   * Unique hash string.
   *
   * This hash string is a hash of the {@link \RsClassModify} object.
   * It need to work with the same {@link \RsClassModify} object on each step.
   *
   * @get get
   * @post get,result
   * @var string
   */
  public $s_id = '';
}

?>