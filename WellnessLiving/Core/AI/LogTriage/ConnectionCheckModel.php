<?php

namespace WellnessLiving\Core\AI\LogTriage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks that Studio can connect to the monolith and returns selected findings.
 *
 * @method WlModelRequest get() Returns a fixed connection value and, when requested, selected findings.
 */
class ConnectionCheckModel extends WlModelAbstract
{
  /**
   * Grouped findings.
   *
   * One element contains:
   *
   * <dl>
   *   <dt>string `dl_first_seen`</dt>
   *   <dd>Local date of the first usage-statistics record.</dd>
   * 
   *   <dt>string `dl_last_seen`</dt>
   *   <dd>Local date of the last usage-statistics record.</dd>
   * 
   *   <dt>string `dtu_first_seen`</dt>
   *   <dd>UTC date/time of the first matching log or async-task record. Empty for background tasks.</dd>
   * 
   *   <dt>string `dtu_last_seen`</dt>
   *   <dd>UTC date/time of the last matching log or async-task record. Empty for background tasks.</dd>
   * 
   *   <dt>int `i_occurrence_count`</dt>
   *   <dd>Number of matching records.</dd>
   * 
   *   <dt>int `i_priority_multiplier`</dt>
   *   <dd>Usage-statistics priority multiplier. Present for the usage-statistics source.</dd>
   * 
   *   <dt>int `id_source`</dt>
   *   <dd>Finding source from {@link TriageSourceSid}.</dd>
   * 
   *   <dt>string `s_object`</dt>
   *   <dd>Usage-statistics object. Present for the usage-statistics source.</dd>
   * 
   *   <dt>string `s_period`</dt>
   *   <dd>Usage-statistics aggregation period. Present for the usage-statistics source.</dd>
   * 
   *   <dt>string `s_priority`</dt>
   *   <dd>Usage-statistics priority. Present for the usage-statistics source.</dd>
   * 
   *   <dt>string `text_message`</dt>
   *   <dd>Log message or task description. Present for log and task sources.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_finding = [];

  /**
   * IDs of finding sources from {@link TriageSourceSid}.
   *
   * @get get
   * @var int[]
   */
  public $a_id_source = [];

  /**
   * Connection check value.
   *
   * @get result
   * @var int
   */
  public $i_result = 0;

  /**
   * `true` returns findings; otherwise `false` performs only the connection check.
   *
   * @get get
   * @var bool
   */
  public $is_finding = false;

  /**
   * Empty string selects the current UTC date.
   *
   * @get get
   * @var string
   */
  public $s_date_mask = '';

  /**
   * Optional case-insensitive message substring.
   *
   * @get get
   * @var string
   */
  public $text_search = '';
}

?>