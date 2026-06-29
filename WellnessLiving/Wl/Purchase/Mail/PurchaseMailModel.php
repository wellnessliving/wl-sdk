<?php

namespace WellnessLiving\Wl\Purchase\Mail;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Emails a receipt for a purchase.
 *
 * @method WlModelRequest post() Sends mail message with list of purchased items for specified purchase.  Validates the caller's access to the purchase and sends a receipt email to the appropriate recipient (staff member or client), recording the action in the mail history log.
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