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
 * Errors, the code of the exception tells the client what has happened:<dl>
 *   <dt>`access`</dt>
 *   <dd>The user is not authorized.</dd>
 *   <dt>`access-purchase`</dt>
 *   <dd>No access to the purchase, or it was made by an anonymous user.</dd>
 *   <dt>`mail-disable`</dt>
 *   <dd>The email pattern is turned off in the business.</dd>
 *   <dt>`mail-error`</dt>
 *   <dd>The email cannot be sent.</dd>
 *   <dt>`mail-invalid`</dt>
 *   <dd>`text_mail` is not a valid email address.</dd>
 *   <dt>`mail-unsubscribed`</dt>
 *   <dd>No address is given, and the buyer has turned the email off in the notification settings.</dd>
 *   <dt>`purchase-invalid`, `purchase-nx`</dt>
 *   <dd>The purchase key is not valid, or the purchase does not exist.</dd>
 *   <dt>`ticket-order-nx`</dt>
 *   <dd>The purchase is not a purchase of tickets.</dd>
 * </dl>
 *
 * @method WlModelRequest post() Sends the confirmation of the purchase with the tickets.  Checks the access to the purchase, finds the order of tickets of the purchase, and sends the email with the tickets and their QR codes to the buyer, or to `text_mail` if it is given. The email is not sent if the pattern is turned off in the business, or if the buyer has turned it off in the notification settings and no address is given. The codes of the errors are listed in the description of the class.
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