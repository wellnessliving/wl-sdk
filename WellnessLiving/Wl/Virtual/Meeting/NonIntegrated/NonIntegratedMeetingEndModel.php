<?php

namespace WellnessLiving\Wl\Virtual\Meeting\NonIntegrated;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to end Non Integrated virtual meeting.
 *
 * @method WlModelRequest post()
 */
class NonIntegratedMeetingEndModel extends WlModelAbstract
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