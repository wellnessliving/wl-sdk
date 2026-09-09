<?php

namespace WellnessLiving\Core;

/**
 * A list of validation rules.
 *
 * Last used ID: 13.
 */
abstract class AValidateRuleSid
{
  /**
   * Asserts that length of a value will never be greater than allowed by rule.
   */
  const LENGTH_MAX = 1;

  /**
   * Asserts that length of a value will never be less then allowed by rule.
   */
  const LENGTH_MIN = 6;

  /**
   * Asserts that email address will be valid.
   */
  const MAIL_VALID = 10;

  /**
   * Asserts that value not empty.
   */
  const NOT_EMPTY = 13;

  /**
   * Asserts that phone number will be valid.
   */
  const PHONE_VALID = 11;

  /**
   * Asserts that length of a string without tags will never be greater than allowed by rule.
   */
  const TAG_LENGTH_MAX = 9;

  /**
   * Asserts that value is a valid file name.
   */
  const TYPE_FILE = 8;

  /**
   * Asserts that type of a value should be float.
   */
  const TYPE_FLOAT = 2;

  /**
   * Asserts that type of a value should be ID.
   */
  const TYPE_ID = 12;

  /**
   * Asserts that type of a value should be ID or zero.
   */
  const TYPE_ZID = 4;

  /**
   * Asserts that value is the primary key in the database.
   *
   * Parameter of the field specifies name of the table and/or name of the primary key where the value should be
   * searched:<ul>
   *   <li>If parameter is not specified, value is searched in the table of controller's library.
   *     Name of the table is derived from field name.</li>
   *   <li>Name of the library ([a-z]+). In this case name of the table is derived from specified name of the library
   *     and field name.</li>
   *   <li>Name of the table's active record class ([A-Z][A-Za-z]+). In this case value is searched in the specified
   *     table.</li>
   * </ul>
   */
  const VALUE_DB = 5;

  /**
   * Asserts that value should not be greater than specified by rule.
   */
  const VALUE_MAX = 7;

  /**
   * Asserts that value should be no less then specified by rule.
   */
  const VALUE_MIN = 3;
}

?>