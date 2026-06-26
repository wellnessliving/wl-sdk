<?php

namespace WellnessLiving\Wl\Virtual\Zoom\Webhook;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Webhook for event meeting end.
 *
 * This webhook is used for old Zoom application.
 *
 * Used for Zoom applications, which are created for {@link \Wl\Business\Account\Subscription\Fitlive\FitliveSubscription} with
 *
 * @method WlModelRequest post()
 */
class MeetingEndModel extends WlModelAbstract
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