<?php

namespace WellnessLiving\Wl\Virtual\Zoom\Webhook;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Webhook for all events related with users.
 *
 * This webhook is used for old Zoom application.
 *
 * @method WlModelRequest post()
 */
class UserModel extends WlModelAbstract
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
  public $o_payload = null;

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