<?php

namespace WellnessLiving\Core\AI\LogTriage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks that Studio can connect to the monolith and returns selected log findings.
 *
 * @method WlModelRequest get() Returns a fixed connection value and, when requested, selected log findings.
 */
class ConnectionCheckModel extends WlModelAbstract
{
  /**
   * Grouped log findings.
   *
   * One element contains:
   *
   * <dl>
   *   <dt>int `i_occurrence_count`</dt>
   *   <dd>Number of matching records.</dd>
   * 
   *   <dt>string `s_first_seen`</dt>
   *   <dd>Date of the first matching record.</dd>
   * 
   *   <dt>string `s_last_seen`</dt>
   *   <dd>Date of the last matching record.</dd>
   * 
   *   <dt>string `s_message`</dt>
   *   <dd>Log message.</dd>
   * 
   *   <dt>string `s_source`</dt>
   *   <dd>Log source: <tt>error</tt> or <tt>slow</tt>.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_log = [];

  /**
   * Connection check value.
   *
   * @get result
   * @var int
   */
  public $i_result = 0;

  /**
   * Whether log findings must be returned.
   *
   * @get get
   * @var bool
   */
  public $is_log = false;

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
  public $s_search = '';

  /**
   * Log source: <tt>all</tt>, <tt>error</tt>, or <tt>slow</tt>.
   *
   * @get get
   * @var string
   */
  public $s_source = 'all';
}

?>