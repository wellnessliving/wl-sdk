<?php

namespace WellnessLiving\Studio\Sprint;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads list of studio sprint list.
 *
 * @method WlModelRequest get()
 */
class SprintModel extends WlModelAbstract
{
  /**
   * A list of options of sprint:
   *
   * <dl>
   *   <dt>bool `is_selected`</dt>
   *   <dd><tt>true</tt> - if this sprint will be selected in the drop-down list, <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>string `k_sprint`</dt>
   *   <dd>Sprint key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the sprint.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_sprint;

  /**
   * Key of the studio project.
   *
   * @get get
   * @var string|null
   */
  public $k_project = null;

  /**
   * Key of the studio task.
   *
   * @get get
   * @var string|null
   */
  public $k_task = null;

  /**
   * Key of the studio parent task.
   *
   * @get get
   * @var string|null
   */
  public $k_task_parent = null;
}

?>