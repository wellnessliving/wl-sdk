<?php

namespace WellnessLiving\Studio\Report\Sprint\Task;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves list of task for specific personnel in passed sprint.
 *
 * @method WlModelRequest get()
 */
class ReportModel extends WlModelAbstract
{
  /**
   * Personnel key.
   *
   * @get get
   * @var string[]
   */
  public $a_personnel = [];

  /**
   * Result for render report grouped by personnel.
   *
   * <dl>
   *   <dt>array `a_task`</dt>
   *   <dd>
   *     List of task for report. Has next structure:
   *     <dl>
   *       <dt>array[] `a_jira`</dt>
   *       <dd>
   *         List of connected jira tasks. Has next structure:
   *         <dl>
   *           <dt>string `s_status_class`</dt>
   *           <dd>Class for style status of the task.</dd>
   * 
   *           <dt>string `text_jira_key`</dt>
   *           <dd>Text key of the jira task.</dd>
   * 
   *           <dt>string `text_status`</dt>
   *           <dd>Status of the jira task.</dd>
   * 
   *           <dt>int `i_front_end_point`</dt>
   *           <dd>Front End points.</dd>
   * 
   *           <dt>int `i_story_point`</dt>
   *           <dd>Story points.</dd>
   * 
   *           <dt>string `text_task`</dt>
   *           <dd>Title of the jira task.</dd>
   * 
   *           <dt>string `text_type`</dt>
   *           <dd>Type of the jira task.</dd>
   * 
   *           <dt>string `url_task`</dt>
   *           <dd>Url of the jira task.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_review`</dt>
   *       <dd>Count of review in task where personnel is author.</dd>
   * 
   *       <dt>int `id_color`</dt>
   *       <dd>Color ID.</dd>
   * 
   *       <dt>string `k_task`</dt>
   *       <dd>Task key.</dd>
   * 
   *       <dt>string `s_status_file`</dt>
   *       <dd>Status file.</dd>
   * 
   *       <dt>string `text_development_time`</dt>
   *       <dd>Development time in human format.</dd>
   * 
   *       <dt>string `text_review_time`</dt>
   *       <dd>Review time in human format.</dd>
   * 
   *       <dt>string `text_status`</dt>
   *       <dd>Status of the task.</dd>
   * 
   *       <dt>string `text_task`</dt>
   *       <dd>Title of the studio task.</dd>
   * 
   *       <dt>string `text_task_key`</dt>
   *       <dd>Text key of the studio task.</dd>
   * 
   *       <dt>string `url_task`</dt>
   *       <dd>Url of the studio task.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_total`</dt>
   *   <dd>
   *     Total by tasks. Each element has next structure:
   *     <dl>
   *       <dt>string `text_total`</dt>
   *       <dd>Total name.</dd>
   * 
   *       <dt>string `text_value`</dt>
   *       <dd>Total value.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_result = [];

  /**
   * @get result
   * @var bool
   */
  public $can_status_change = false;

  /**
   * Report ID.
   *
   * @get get
   * @var int
   */
  public $id_report = 1;

  /**
   * Sprint key.
   *
   * @get get
   * @var string
   */
  public $k_sprint = '';
}

?>