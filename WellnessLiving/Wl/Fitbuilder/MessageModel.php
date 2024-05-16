<?php

namespace WellnessLiving\Wl\Fitbuilder;

use WellnessLiving\WlModelAbstract;

class MessageModel extends WlModelAbstract
{
  /**
   * Messenger information.
   *
   * @post post
   * @var array
   */
  public $a_data = [];

  /**
   * Messenger channel key.
   *
   * @post get
   * @var string
   */
  public $k_channel = '';
}

?>