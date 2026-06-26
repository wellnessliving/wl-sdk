<?php

namespace WellnessLiving\Studio\Personnel\Telegram;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for get request from telegram.
 *
 * @method WlModelRequest post()
 */
class TelegramHookModel extends WlModelAbstract
{
  /**
   * Telegram bot token for additional check from telegram.
   *
   * @post get
   * @var string
   */
  public $s_token;
}

?>