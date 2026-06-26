<?php

namespace WellnessLiving\Core\Prg\PgSql;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get PostgreSQL query and connection to execute.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class QueryExecuteModel extends WlModelAbstract
{
  /**
   * Result of the executing query.
   *
   * @post result
   * @var string
   */
  public $html_body;

  /**
   * `true` if the query must be executed on behalf of the root,
   * `false` if the query must be executed on behalf of a normal user with limited rights.
   *
   * @post post
   * @var bool
   */
  public $is_root;

  /**
   * The connection key to execute PostgreSQL query.
   *
   * @post post
   * @var string
   */
  public $s_connection;

  /**
   * PostgreSQL query to execute.
   *
   * @post post
   * @var string
   */
  public $s_pgsql_query;
}

?>