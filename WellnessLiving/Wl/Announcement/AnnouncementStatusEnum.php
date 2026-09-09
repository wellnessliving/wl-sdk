<?php

namespace WellnessLiving\Wl\Announcement;

/**
 * List of announcement statuses.
 */
class AnnouncementStatusEnum
{
  /**
   * Announcement does not have publish/unpublish dates.
   */
  const DRAFT = 1;

  /**
   * Announcement currently is published.
   */
  const PUBLISH = 2;

  /**
   * Announcement scheduled for publishing.
   */
  const SCHEDULE = 3;

  /**
   * Announcement previously will be published, but now not published.
   */
  const UNPUBLISH = 4;
}

?>