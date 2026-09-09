<?php

namespace WellnessLiving\Core\Search\Postgres;

/**
 * Kinds of relations listed by <tt>pg_class</tt> catalog.
 *
 * Last used ID: 10
 *
 * @link https://www.postgresql.org/docs/13/catalog-pg-class.html
 */
class PostgresRelationKindSid
{
  /**
   * Composite type.
   *
   * Denoted in <tt>pg_class.relkind</tt> as lowercase 'c'.
   */
  const COMPOSITE_TYPE = 1;

  /**
   * Foreign table.
   *
   * Denoted in <tt>pg_class.relkind</tt> as lowercase 'f'.
   */
  const FOREIGN_TABLE = 2;

  /**
   * Index.
   *
   * Denoted in <tt>pg_class.relkind</tt> as lowercase 'i'.
   */
  const INDEX = 3;

  /**
   * Materialized view.
   *
   * Denoted in <tt>pg_class.relkind</tt> as lowercase 'm'.
   *
   * @link https://www.postgresql.org/docs/13/rules-materializedviews.html
   */
  const MATERIALIZED_VIEW = 4;

  /**
   * Ordinary table.
   *
   * Denoted in <tt>pg_class.relkind</tt> as lowercase 'r'.
   */
  const ORDINARY_TABLE = 5;

  /**
   * Partitioned index.
   *
   * Denoted in <tt>pg_class.relkind</tt> as uppercase 'I'.
   */
  const PARTITIONED_INDEX = 6;

  /**
   * Partitioned table.
   *
   * Denoted in <tt>pg_class.relkind</tt> as lowercase 'p'.
   */
  const PARTITIONED_TABLE = 7;

  /**
   * Sequence.
   *
   * Denoted in <tt>pg_class.relkind</tt> as uppercase 'S'.
   *
   * @link https://www.postgresql.org/docs/13/sql-createsequence.html
   */
  const SEQUENCE = 8;

  /**
   * TOAST table.
   *
   * Denoted in <tt>pg_class.relkind</tt> as lowercase 't'.
   *
   * @link https://www.postgresql.org/docs/13/storage-toast.html
   */
  const TOAST_TABLE = 9;

  /**
   * View.
   *
   * Denoted in <tt>pg_class.relkind</tt> as lowercase 'v'.
   */
  const VIEW = 10;
}

?>