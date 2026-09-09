<?php

namespace WellnessLiving\Core\Fisheye;

/**
 * List of statuses of the review on the <tt>FishEye</tt>.
 */
class ReviewStatusSid
{
  /**
   * Review marked as abandoned. Usually this is an invalid reviews.
   */
  const ABANDON = 1;

  /**
   * Review is closed.
   */
  const CLOSED = 4;

  /**
   * Review in draft mode. Users can view review but the cannot join review to finish it.
   */
  const DRAFT = 2;

  /**
   * Review is opened and ready for reviewing.
   */
  const REVIEW = 3;

  /**
   * Status of the review when we could not juxtapose status from <tt>FishEye</tt> with statuses in ours system.
   */
  const UNKNOWN = 5;
}

?>