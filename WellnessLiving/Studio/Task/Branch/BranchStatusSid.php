<?php

namespace WellnessLiving\Studio\Task\Branch;

/**
 * Branch statuses.
 *
 * Last used ID: 3.
 */
class BranchStatusSid
{
  /**
   * The branch and all related things (catalogs in the repository, site) are being created now.
   *
   * This action is triggered from the task page on the Studio.
   *
   * The branch in this status may be transitioned to:
   * * {@link BranchStatusSid::READY} in a case when creation is successfully completed;
   * * {@link BranchStatusSid::DELETING} in a case when creation is not completed and the branch
   *   should be deleted before repeatedly creation.
   */
  const CREATING = 1;

  /**
   * The branch and all related things (catalogs in the repository, site) are being deleted now.
   *
   * This action is triggered from the task page on the Studio.
   *
   * The branch in this status may be only deleted from the database.
   */
  const DELETING = 3;

  /**
   * The branch and all related things (catalogs in the repository, site) are ready to use.
   *
   * This action is triggered from <tt>BranchCreate</tt> build.
   *
   * The branch in this status may be transitioned only to {@link BranchStatusSid::DELETING}.
   */
  const READY = 2;
}

?>