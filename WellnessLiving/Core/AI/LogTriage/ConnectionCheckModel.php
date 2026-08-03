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
   *   <dt>int `i_occurrence_count`</dt>
   *   <dd>Number of matching records.</dd>
   * 
   *   <dt>int `id_source`</dt>
   *
   * 
   *   <dt>string `text_message`</dt>
   *   <dd>Log message. Present for log sources.</dd>
   * 
   *   <dt>string `dtu_first_seen`</dt>
   *   <dd>UTC date/time of the first matching log record.</dd>
   * 
   *   <dt>string `dtu_last_seen`</dt>
   *   <dd>UTC date/time of the last matching log record.</dd>
   * 
   *   <dt>string `s_object`</dt>
   *   <dd> Present for this source.</dd>
   * 
   *   <dt>string `dl_first_seen`</dt>
   *
   * 
   *   <dt>string `dl_last_seen`</dt>
   *
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_finding = [];

  /**
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
   * Whether findings must be returned.
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