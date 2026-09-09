<?php

namespace WellnessLiving\Core\Db\Update;

/**
 * A list of operations that may be performed on table rows that is moved from the main database to sharded database.
 */
class DbUpdateMoveOperationSid
{
  /**
   * A row was deleted from the source table.
   */
  const DELETE = 2;

  /**
   * A row was inserted into the source table.
   */
  const INSERT = 1;

  /**
   * A row was updated in the source table.
   */
  const UPDATE = 3;
}

?>