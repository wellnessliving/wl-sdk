<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\Backend;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to get column list of the table schedule.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post() Saves columns position.
 */
class ColumnListModel extends WlModelAbstract
{
  /**
   * Column list.
   * Each element has next structure:
   *
   * <dl>
   *   <dt>bool `is_fix`</dt>
   *   <dd>Whether column is fixed. Should not be hidden.</dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Whether column is hidden.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Column name.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Column title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_column;

  /**
   * Column list.
   * Each element has next structure described here {@link ColumnListModel::$a_column}
   *
   * @post post
   * @var array
   */
  public $a_column_set;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * User's UID key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid;
}

?>