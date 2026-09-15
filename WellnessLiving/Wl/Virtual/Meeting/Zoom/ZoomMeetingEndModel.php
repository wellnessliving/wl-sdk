<?php

namespace WellnessLiving\Wl\Virtual\Meeting\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api called when meeting ended.
 *
 * @method WlModelRequest post() Ends a virtual meeting.  Validates the business and, for requests made over http, checks that the current user has  access to it. Requires a meeting id, then delegates to the provider-specific `meetingEnd()`  implementation for the cleanup that actually ends the meeting.
 */
class ZoomMeetingEndModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = null;

  /**
   * Meeting id.
   *
   * @post post
   * @var string
   */
  public $s_meeting_id = null;
}

?>