<?php

namespace WellnessLiving\Wl\Task\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to add edit or delete task.
 *
 * @method WlModelRequest delete() Removes task.
 * @method WlModelRequest get() Returns data for task edit form.
 * @method WlModelRequest post() Adds or changes task.
 * @method WlModelRequest put() Changes task status.
 */
class EditModel extends WlModelAbstract
{
  /**
   * List of staff keys assigned to task.
   *
   * Empty array means not set.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_staff = [];

  /**
   * Due date.
   *
   * @get result
   * @post post
   * @var string
   */
  public $dl_due = '';

  /**
   * Task status.
   *
   * `null` means not set.
   *
   * @get result
   * @post post
   * @put post
   * @var int|null
   */
  public $id_task_status = null;

  /**
   * Business key.
   *
   * `null` means not set.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Location key.
   *
   * `null` means not set.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * Task key.
   *
   * `null` means not set.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string|null
   */
  public $k_task = null;

  /**
   * Task title.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * Due time.
   *
   * @get result
   * @post post
   * @var string
   */
  public $tl_due = '';

  /**
   * Client's uid for whom connected task.
   *
   * `null` means not set.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $uid = null;

  /**
   * Task description.
   *
   * @get result
   * @post post
   * @var string
   */
  public $xml_description = '';
}

?>