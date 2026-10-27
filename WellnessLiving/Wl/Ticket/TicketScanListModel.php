<?php

namespace WellnessLiving\Wl\Ticket;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Checks in several tickets of a ticketed event with one call: marks the visits booked with the tickets as attended.
 *
 * The tickets are given by their keys, as {@link TicketListModel} returns them, and are checked against the session the
 * staff member has opened, the same way {@link TicketScanModel} does it. Every ticket is checked in on its own: a ticket
 * that cannot be checked in does not affect the others and does not fail the call, its problem is reported in
 * {@link TicketScanListModel::$a_result} instead. A check-in from a list is allowed after the end of the session.
 *
 * Problems with the call itself are reported with {@link UserException}:<dl>
 *   <dt>`access`</dt>
 *   <dd>The staff member has no attendance privilege for the class of the session.</dd>
 *   <dt>`access-backend`</dt>
 *   <dd>No staff session, or no access to the business.</dd>
 *   <dt>`class-period-nx`</dt>
 *   <dd>The session does not exist in the business.</dd>
 * </dl>
 *
 * The outcome of a ticket in {@link TicketScanListModel::$a_result} is one of:<dl>
 *   <dt>`ticket-attended`</dt>
 *   <dd>The ticket has been checked in by this call.</dd>
 *   <dt>`ticket-used`</dt>
 *   <dd>The ticket had already been checked in earlier. Nothing is written, the time of the first check-in stays.</dd>
 *   <dt>`ticket-cancelled`</dt>
 *   <dd>The ticket has been cancelled.</dd>
 *   <dt>`ticket-nx`</dt>
 *   <dd>There is no such ticket in the business.</dd>
 *   <dt>`ticket-session-mismatch`</dt>
 *   <dd>The ticket is for another session.</dd>
 *   <dt>`ticket-visit-nx`</dt>
 *   <dd>The ticket has no visit.</dd>
 *   <dt>`ticket-invalid`</dt>
 *   <dd>The visit of the ticket is in a status that cannot be checked in.</dd>
 * </dl>
 *
 * @method WlModelRequest post() Checks in the tickets.  Validates the business and the access of the current user to it once for the whole call, then checks in every ticket on its own and loads the counters of the session once, after all of them.
 */
class TicketScanListModel extends WlModelAbstract
{
  /**
   * Outcome of every ticket of the request, in the order of {@link TicketScanListModel::$a_ticket_item} without
   * repeated keys. Every item has the next structure: 
   *
   * <dl>
   *   <dt>string `sid_outcome`</dt>
   *   <dd>Outcome of the ticket, see the description of the class.</dd>
   * 
   *   <dt>string `k_ticket_item`</dt>
   *   <dd>Key of the ticket, as it was sent.</dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_result = [];

  /**
   * Keys of the tickets to check in, as {@link TicketListModel} returns them.
   *
   * A key that is repeated is checked in once.
   *
   * @post post
   * @var string[]
   */
  public $a_ticket_item = [];

  /**
   * Start of the session being checked in, in UTC and MySQL format.
   *
   * @post post
   * @var string
   */
  public $dtu_start = '';

  /**
   * Number of the tickets already checked in for the session, after the call. Returned once for the whole call.
   *
   * @post result
   * @var int
   */
  public $i_attend = 0;

  /**
   * Number of the tickets sold for the session, after the call: not cancelled ones, including those whose holders
   * have not come. Returned once for the whole call.
   *
   * @post result
   * @var int
   */
  public $i_sold = 0;

  /**
   * Source of the check-in. One of {@link ModeSid}.
   *
   * `0` if not specified, in this case the source is detected from the current request.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the class period the session being checked in belongs to.
   *
   * @post post
   * @var string
   */
  public $k_class_period = '';
}

?>