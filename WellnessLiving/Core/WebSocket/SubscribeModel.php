<?php

namespace WellnessLiving\Core\WebSocket;

use WellnessLiving\WlModelAbstract;

/**
 * Checks whether a listener can subscribe to specified channel.
 *
 * If yes, subscribes it.
 */
class SubscribeModel extends WlModelAbstract
{
  /**
   * Keys of the channel.
   *
   * Key is name of a key field in a channel controller.
   * Value is its value.
   *
   * Subscriber will only receive notifications about events in which all these values equal values specified here.
   *
   * @post post
   * @var array
   */
  public $a_key = [];

  /**
   * All messages in queue. Key is a message key. Value is message data.
   *
   * When a client is initially subscribed for a WebSocket channel, entire message queue is sent to the client.
   * This is needed to send message that were generated before a client has subscribed.
   *
   * @post result
   * @var array
   */
  public $a_message_broadcast = [];

  /**
   * Channel controller CID.
   *
   * @post post
   * @var int
   */
  public $cid_channel;

  /**
   * Subscriber password.
   *
   * @post post
   * @var string
   */
  public $s_password;

  /**
   * Request token.
   *
   * This token is only used for asynchronous functions, and identifies a specific request.
   *
   * @post post
   * @var string
   */
  public $s_token;
}

?>