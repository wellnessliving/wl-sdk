<?php

namespace WellnessLiving\Wl\Skin\Application\Connect\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for send test push.
 *
 * @method WlModelRequest post()
 */
class ConnectEditModel extends WlModelAbstract
{
  /**
   * Data for send push.
   *
   * @post post
   * @var array
   */
  public $a_push;

  /**
   * Message push.
   *
   * @post post
   * @var string
   */
  public $s_message;
}

?>