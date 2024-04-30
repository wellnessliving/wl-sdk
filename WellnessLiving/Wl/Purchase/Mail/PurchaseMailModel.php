<?php

namespace WellnessLiving\Wl\Purchase\Mail;

use WellnessLiving\WlModelAbstract;

/**
 * Emails a receipt for a purchase.
 */
class PurchaseMailModel extends WlModelAbstract
{
  /**
   * Determines whether mail sending should be forced.
   *
   * @post post
   * @var bool
   */
  public $is_send_force = false;

  /**
   * The key of the purchase.
   *
   * @post post
   * @var string
   */
  public $k_purchase = '';
}

?>