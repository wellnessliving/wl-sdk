<?php

namespace WellnessLiving\Studio\Task\Branch;

/**
 *  List of the available modes for <tt>BranchDelete</tt> build.
 */
class BranchDeleteModeSid
{
  /**
   * Deleting branch without merging changes.
   */
  const DELETE_NO_MERGE = 3;

  /**
   * Changes are merged. Branch is not deleted.
   */
  const MERGE_ONLY = 2;

  /**
   * Deleting branch with merging changes.
   */
  const STANDARD = 1;
}

?>