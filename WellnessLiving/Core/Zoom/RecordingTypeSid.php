<?php

namespace WellnessLiving\Core\Zoom;

/**
 * List of recording types.
 *
 * Last used ID: 2.
 */
class RecordingTypeSid
{
  /**
   * Audio only.
   */
  const AUDIO = 1;

  /**
   * Audio and video of host share screen with closed captioning.
   */
  const SHARED_SCREEN_GALLERY = 4;

  /**
   * Audio and video of host share screen.
   */
  const SHARED_SCREEN_SPEAKER = 2;

  /**
   * Audio and video of host share screen with closed captioning.
   */
  const SHARED_SCREEN_SPEAKER_CC = 3;
}

?>