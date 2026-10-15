<?php

namespace WellnessLiving\Wl\Ticket;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Undoes a check-in of a ticket of a ticketed event: returns the visit booked with the ticket from attended to booked.
 *
 * The ticket is checked against the session the staff member has opened, the same way {@link TicketScanModel} does it.
 * Any problem with the ticket is reported with {@link UserException}, the code of the exception tells the client what
 * has happened:<dl>
 *   <dt>`access`</dt>
 *   <dd>The staff member has no attendance privilege for the class of the session.</dd>
 *   <dt>`access-backend`</dt>
 *   <dd>No staff session, or no access to the business.</dd>
 *   <dt>`class-period-nx`</dt>
 *   <dd>The session does not exist in the business.</dd>
 *   <dt>`ticket-nx`</dt>
 *   <dd>There is no such ticket in the business.</dd>
 *   <dt>`ticket-visit-nx`</dt>
 *   <dd>The ticket has no visit.</dd>
 *   <dt>`ticket-session-mismatch`</dt>
 *   <dd>The ticket is for another session.</dd>
 *   <dt>`ticket-not-used`</dt>
 *   <dd>The ticket has not been checked in, so there is nothing to undo.</dd>
 *   <dt>`ticket-cancelled`</dt>
 *   <dd>The ticket has been cancelled.</dd>
 *   <dt>`ticket-invalid`</dt>
 *   <dd>The visit of the ticket is in a status that cannot be undone.</dd>
 * </dl>
 *
 * The ticket is sent only in the body of the request, so it is not a part of the key of the model and the request is
 * not logged.
 *
 * @method WlModelRequest post() Undoes the check-in of the ticket.  Validates the business and the access of the current user to it, finds the ticket, checks it against the session sent by the client, and returns its visit from attended to booked. Takes the same critical section as {@link \Wl\Ticket\TicketScanApi}, so a check-in and an undo of the same ticket never run at the same time.
 */
class TicketUndoModel extends WlModelAbstract
{
  /**
 * Start of the session, in UTC and MySQL format.
 *
 * @post post
 * @var string
 */
  public $dtu_start = '';

  /**
 * Number of the tickets checked in for the session after the call.
 *
 * @post result
 * @var int
 */
  public $i_attend = 0;

  /**
 * Number of the tickets sold for the session: not cancelled ones, including those whose holders have not come.
 *
 * @post result
 * @var int
 */
  public $i_sold = 0;

  /**
 * Business key.
 *
 * @post post
 * @var string
 */
  public $k_business = '';

  /**
 * Key of the class period the session belongs to.
 *
 * @post post
 * @var string
 */
  public $k_class_period = '';

  /**
 * Key of the ticket to undo the check-in of.
 *
 * @post post
 * @var string
 */
  public $k_ticket_item = '';
}

?>