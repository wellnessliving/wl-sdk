<?php

namespace WellnessLiving\Wl\Virtual\Meeting\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api called when meeting ended.
 *
 * @method WlModelRequest post()
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