<?php

namespace WellnessLiving\Studio\Ip\Bot;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete bots.
 *
 * @method WlModelRequest delete() Deletes a bot.  Removes the bot record and schedules service updates for all services the bot had access to.
 * @method WlModelRequest get() Returns information about a bot.  Returns the bot name, network, password, update rules, and active status.
 * @method WlModelRequest post() Saves a bot.  Creates or updates a bot record. When update rules are provided, the network is derived from them.
 */
class EditModel extends WlModelAbstract
{
  /**
   * Whether this bot is active.
   *
   * @get result
   * @post post
   * @var bool
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
   * Note that value sent here is ignored in a case {@link EditModel::$text_update} is not empty.
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