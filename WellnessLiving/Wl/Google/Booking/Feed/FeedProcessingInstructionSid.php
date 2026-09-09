<?php

namespace WellnessLiving\Wl\Google\Booking\Feed;

/**
 * Instructs how to process the feed.
 */
class FeedProcessingInstructionSid
{
  /**
   * This Feed message is one shard of a complete feed. Anything previously
   * supplied by this partner will be deleted; the contents of this feed
   * represent the entire state of the world.
   */
  const PROCESS_AS_COMPLETE = 1;

  /**
   * This Feed message is one shard of an incremental feed. Existing entities
   * will be left untouched except as modified in this feed.
   *
   * @deprecated This value is deprecated according to Reserve with Google documentation.
   *   {@link FeedProcessingInstructionSid::PROCESS_AS_COMPLETE} should be used always.
   */
  const PROCESS_AS_INCREMENTAL = 2;
}

?>