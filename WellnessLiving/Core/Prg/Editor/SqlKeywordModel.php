<?php

namespace WellnessLiving\Core\Prg\Editor;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for generating keywords for sql editor on programmers page.
 *
 * @method WlModelRequest get()
 */
class SqlKeywordModel extends WlModelAbstract
{
  /**
   * List of all MySQL connections.
   *
   * Key is name of a MySQL connection.
   *
   * Value is a list of tables in that connection.
   * Alternatively, value may have name of another connection - in a case a list of tables in these two connections
   * are equal.
   *
   * @get result
   * @var string[][]|string[]
   */
  public $a_connection;

  /**
   * List of information about tables.
   *
   * Key is name of a table.
   * Value is an array with the following structure:
   *
   * <dl>
   *   <dt>string `s_type`</dt>
   *   <dd>Type of the column.</dd>
   * 
   *   <dt>string `s_table`</dt>
   *   <dd>
   *     Name of a table in which this column is a primary key.
   * 
   *   Not specified if this column is not a primary key.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_table;
}

?>