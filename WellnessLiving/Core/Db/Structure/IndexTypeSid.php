<?php

namespace WellnessLiving\Core\Db\Structure;

/**
 * A list of types of indexes.
 */
class IndexTypeSid
{
  /**
   * Index is based on balanced tree.
   */
  const BTREE = 1;

  /**
   * Fulltext search index.
   *
   * @link https://dev.mysql.com/doc/refman/8.0/en/fulltext-search.html
   */
  const FULLTEXT = 3;

  /**
   * Index is based on hash tables.
   */
  const HASH = 2;

  /**
   * Spatial index.
   *
   * @link https://dev.mysql.com/doc/refman/8.0/en/spatial-type-overview.html
   */
  const SPATIAL = 4;
}

?>