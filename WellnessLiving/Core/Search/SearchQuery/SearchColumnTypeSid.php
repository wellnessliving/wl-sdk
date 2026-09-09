<?php

namespace WellnessLiving\Core\Search\SearchQuery;

/**
 * Represents a list of column types defined from name of the column.
 *
 * Last used: 10.
 */
class SearchColumnTypeSid
{
  /**
   * Binary string (field name prefix 'z_').
   *
   * When retrieving from the database, the value will be restored
   *
   * Aggregate functions cannot be applied to a field of this type.
   */
  const BINARY = 9;

  /**
   * Date.
   */
  const DATE = 1;

  /**
   * Date and time.
   */
  const DATETIME = 2;

  /**
   * Fixed point number.
   *
   * Currently this type is designed to represent money.
   * During queries to the database, this type is converted to `decimal(32,4)`.
   * Additional development is required to support extra settings for fixed point number.
   */
  const FIXED = 4;

  /**
   * Floating point number.
   */
  const FLOAT = 3;

  /**
   * Integer number.
   */
  const INT = 5;

  /**
   * Database key.
   */
  const KEY = 7;

  /**
   * A string.
   */
  const STRING = 6;

  /**
   * Data in the form of a structure:
   * * arrays (field name prefix 'a_');
   * * objects field name prefix 'o_').
   *
   * Before being stored in the search index, the field value will be serialized using
   *
   * When retrieving from the database, the value will be restored in the processed order by the {@link base64_decode()}
   *
   * Aggregate functions cannot be applied to a field of this type.
   */
  const STRUCTURE = 10;

  /**
   * Type is undefined.
   */
  const UNDEFINED = 8;
}

?>