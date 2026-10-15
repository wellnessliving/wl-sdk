<?php

namespace WellnessLiving\Wl\Ticket\Purchase;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Mail\PurchaseMailModel;
use WellnessLiving\Wl\RsMailSid;

/**
 * Sends once again the confirmation of a purchase of tickets to a ticketed event.
 *
 * The email ({@link RsMailSid::TICKET_PURCHASE}) contains the tickets of the order with their QR codes.
 * Access to the purchase is checked the same way as in {@link PurchaseMailModel}.
 *
 * @method WlModelRequest post() Sends the confirmation of the purchase with the tickets.
 */
class TicketPurchaseMailModel extends WlModelAbstract
{
  /**
 * The key of the purchase of tickets.
 *
 * @post post
 * @var string
 */
  public $k_purchase = '';

  /**
 * Email to send the tickets to instead of the email of the buyer.
 *
 * Empty to send the email to the buyer.
 *
 * @post post
 * @var string
 */
  public $text_mail = '';
}

?>