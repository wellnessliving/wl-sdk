<?php

namespace WellnessLiving\Wl\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api called by zoom when user updated.
 *
 * @method WlModelRequest post()
 */
class ZoomUserSyncModel extends WlModelAbstract
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
   * User payload information.
   *
   * @field payload
   * @post post
   * @var \Wl\Zoom\ZoomUserSyncEntity
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