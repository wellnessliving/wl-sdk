<?php

namespace WellnessLiving\Wl\Task\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Task\TaskStatusSid;

/**
 * Point to add edit or delete task.
 *
 * @method WlModelRequest delete() Removes task.  Deletes the task record, removes any pending due-date reminder, reindexes search data for  the previously assigned client, logs the removal, and notifies the task channel so that  connected clients refresh their task list.
 * @method WlModelRequest get() Returns data for task edit form.  Loads the task and fills the response fields the edit form needs: assigned staff, due date  and time, status, location, title, client, and description.
 * @method WlModelRequest post() Adds or changes task.  Validates the submitted task data, saves it in a transaction, reindexes search data for the  previously and newly assigned clients, logs the change, sends an assignment notification  email to newly assigned staff, and notifies the task channel.
 * @method WlModelRequest put() Changes task status.  Updates the task status, logs the change, and notifies the task channel so that connected  clients refresh their task list.
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
 * @var string[]
 * @deprecated Use {@link EditModel::$a_uid_staff} instead.
 */
  public $a_staff = [];

  /**
 * List of staff user IDs assigned to task.
 *
 * Empty array means not set.
 *
 * @get result
 * @post post
 * @var string[]
 */
  public $a_uid_staff = [];

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
 * @see TaskStatusSid
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