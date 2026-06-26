<?php

namespace WellnessLiving\Studio\Ip\Bot;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Updates network of specified bot.
 *
 * @method WlModelRequest get() Updates network of the bot.
 */
class UpdateModel extends WlModelAbstract
{
  /**
   * Password to update the bot.
   *
   * @get get
   * @var string
   */
  public $s_password;
}

?>