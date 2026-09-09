<?php

namespace WellnessLiving\Core\Db\Update;

/**
 * Represents a list of foreign key referential actions.
 */
class DbUpdateForeignActionSid
{
  /**
   * Delete or update the row from the parent table, and automatically delete or update the matching rows in the child
   * table.
   */
  const CASCADE = 1;

  /**
   * Rejects the delete or update operation for the parent table.
   */
  const RESTRICT = 2;

  /**
   * Delete or update the row from the parent table, and set the foreign key column or columns in the child table to
   * <tt>null</tt>.
   */
  const SET_NULL = 3;
}

?>