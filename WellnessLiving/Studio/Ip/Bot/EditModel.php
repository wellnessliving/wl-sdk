<?php

namespace WellnessLiving\Studio\Ip\Bot;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to create, edit and delete bots.
 */
class EditModel extends WlModelAbstract
{
  /**
   * Whether this bot is active.
   *
   * @get result
   * @post post
   * @var string
   */
  public $is_active;

  /**
   * If a bot is edited, its key is stored here.
   *
   * <tt>null</tt> if a new bot should be created.
   * This value is required for create and delete operations.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_ip_bot = null;

  /**
   * Name of the bot.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_bot;

  /**
   * Network of the bot.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_network;

  /**
   * Update password.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_password = '';

  /**
   * Network update rules.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_update = '';
}

?>