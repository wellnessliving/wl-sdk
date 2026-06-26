<?php

namespace WellnessLiving\Core\Prg\AsyncTask;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 *  Get data about asynchronous task.
 *
 * @method WlModelRequest delete() Delete asynchronous task.
 * @method WlModelRequest get() Get information about asynchronous task.
 * @method WlModelRequest put() Run asynchronous task again.
 */
class AsyncThreadListModel extends WlModelAbstract
{
  /**
   * A list of identifiers of asynchronous task.
   *
   * @delete put
   * @put post
   *
   * @var string[]
   */
  public $a_id = [];

  /**
   * List of task representations displayed to customers.
   *
   * Each element contains rendered information about an individual task.
   *
   * The structure of each array element is:
   *
   * <dl>
   *   <dt>array `a_view`</dt>
   *   <dd>
   *     Contain log information about error that happened this task.
   *
   *   </dd>
   * 
   *   <dt>string `html_task`</dt>
   *   <dd>Dumped variable of the task.</dd>
   * </dl>
   * @get result
   *
   * @var array[]
   */
  public $a_info;

  /**
   * An identifier of asynchronous task.
   *
   * @get get
   *
   * @var string
   */
  public $s_id = '';
}

?>