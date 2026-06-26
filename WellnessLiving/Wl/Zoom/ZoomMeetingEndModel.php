<?php

namespace WellnessLiving\Wl\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api called by Zoom when meeting ended.
 *
 * @method WlModelRequest post()
 */
class ZoomMeetingEndModel extends WlModelAbstract
{
  /**
   * Event type.
   *
   * @field event
   * @post post
   * @var int
   */
  public $id_event = 0;

  /**
   * Meeting payload information.
   *
   * @field payload
   * @post post
   * @var \Wl\Zoom\ZoomMeetingEndEntity
   */
  public $o_payload;

  /**
   * Encrypted token string.
   *
   * @field encryptedToken
   * @post result
   * @var string
   */
  public $s_token_encrypted = '';

  /**
   * Plain token string.
   *
   * @field plainToken
   * @post result
   * @var string
   */
  public $s_token_plain = '';
}

?>