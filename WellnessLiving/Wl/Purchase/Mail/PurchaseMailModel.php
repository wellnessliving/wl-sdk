<?php

namespace WellnessLiving\Wl\Purchase\Mail;

use WellnessLiving\WlModelAbstract;

/**
 * Purchase email sending.
 */
class PurchaseMailModel extends WlModelAbstract
{
  /**
   * Whether mail sending should be forced.
   *
   * @post post
   * @var bool
   */
  public $is_send_force = false;

  /**
   * Purchase key.
   *
   * @post post
   * @var string
   */
  public $k_purchase = '';
}

?>