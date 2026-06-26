<?php

namespace WellnessLiving\Wl\Profile\Purchase;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model to send user's receipt by email.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class MailModel extends WlModelAbstract
{
  /**
   * Purchase ID.
   *
   * @post get
   * @var string
   */
  public $k_purchase;

  /**
   * ID of user for who receipt should be sent.
   *
   * @post get
   * @var string
   */
  public $uid;
}

?>