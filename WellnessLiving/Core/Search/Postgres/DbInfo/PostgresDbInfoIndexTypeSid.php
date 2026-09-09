<?php

namespace WellnessLiving\Core\Search\Postgres\DbInfo;

/**
 * List of index types in PostgreSQL.
 *
 * @link https://www.postgresql.org/docs/13/indexes-types.html
 */
class PostgresDbInfoIndexTypeSid
{
  /**
   * BRIN index.
   */
  const BRIN = 1;

  /**
   * B-tree index
   */
  const BTREE = 2;

  /**
   * GIN index.
   */
  const GIN = 3;

  /**
   * GIST index.
   */
  const GIST = 4;

  /**
   * Hash index.
   */
  const HASH = 5;

  /**
   * SP-GIST index.
   */
  const SPGIST = 6;
}

?>