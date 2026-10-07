<?php

namespace WellnessLiving\Wl\Ticket;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Checks in a ticket of a ticketed event: marks the visit booked with the ticket as attended.
 *
 * The ticket is given either by its full key or by a short numbers-only code, and is checked against the session
 * the staff member has opened. Any problem with the ticket is reported with {@link UserException}, the code of the
 * exception tells the client what has happened:<dl>
 *   <dt>`ticket-code-invalid`</dt>
 *   <dd>The value is neither a ticket key nor a valid short code.</dd>
 *   <dt>`ticket-nx`</dt>
 *   <dd>There is no such ticket in the business.</dd>
 *   <dt>`ticket-visit-nx`</dt>
 *   <dd>The ticket has no visit.</dd>
 *   <dt>`ticket-session-mismatch`</dt>
 *   <dd>The ticket is for another session.</dd>
 *   <dt>`ticket-used`</dt>
 *   <dd>The ticket has already been checked in.</dd>
 *   <dt>`ticket-cancelled`</dt>
 *   <dd>The ticket has been cancelled.</dd>
 *   <dt>`ticket-invalid`</dt>
 *   <dd>The visit of the ticket is in a status that cannot be checked in.</dd>
 *   <dt>`ticket-session-ended`</dt>
 *   <dd>The session has ended and checking in the past is not allowed.</dd>
 * </dl>
 *
 * The ticket is sent only in the body of the request, so it is not a part of the key of the model and the request is
 * not logged.
 *
 * @method WlModelRequest post() Checks in the ticket.  Validates the business and the access of the current user to it, finds the ticket, checks it against the session sent by the client, and marks its visit as attended.
 */
class TicketScanModel extends WlModelAbstract
{
  /**
 * Time when the ticket has been checked in, in UTC and MySQL format.
 *
 * `null` if the ticket was not checked in.
 *
 * @post result,error
 * @var string|null
 */
  public $dtu_attend = null;

  /**
 * Time when the visit of the ticket has been cancelled, in UTC and MySQL format.
 *
 * `null` if the ticket was not cancelled.
 *
 * @post result,error
 * @var string|null
 */
  public $dtu_cancel = null;

  /**
 * End of the session the ticket is for, in UTC and MySQL format.
 *
 * @post result
 * @var string
 */
  public $dtu_session_end = '';

  /**
 * Start of the session the ticket is for, in UTC and MySQL format.
 *
 * Equals {@link TicketScanModel::$dtu_start} when the ticket is for the session the client has sent.
 *
 * @post result,error
 * @var string
 */
  public $dtu_session_start = '';

  /**
 * Start of the session being checked in, in UTC and MySQL format.
 *
 * @post post
 * @var string
 */
  public $dtu_start = '';

  /**
 * Number of the tickets already checked in for the session, including this one.
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
 * Source of the check-in. One of {@link ModeSid}.
 *
 * `0` if not specified, in this case the source is detected from the current request.
 *
 * @post post
 * @var int
 */
  public $id_mode = 0;

  /**
 * Whether it is allowed to check in a ticket after its session has ended.
 *
 * `false` to answer with an error in this case.
 *
 * @post post
 * @var bool
 */
  public $is_past_allowed = false;

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
 * @post post,error
 * @var string
 */
  public $k_class_period = '';

  /**
 * Key of the class period the session of the ticket belongs to.
 *
 * Differs from {@link TicketScanModel::$k_class_period} only when the ticket is for another session.
 *
 * @post result,error
 * @var string
 */
  public $k_class_period_ticket = '';

  /**
 * Key of the ticket.
 *
 * @post result
 * @var string
 */
  public $k_ticket_item = '';

  /**
 * Key of the visit booked with the ticket.
 *
 * @post result
 * @var string
 */
  public $k_visit = '';

  /**
 * Either the full key of the ticket or its short numbers-only code.
 *
 * The short code may contain any separators, for example `4829-1736`.
 *
 * @post post
 * @var string
 */
  public $text_ticket = '';

  /**
 * Short code of the ticket in the format for displaying, for example `4829-1736`.
 *
 * Empty if the ticket has no short code.
 *
 * @post result
 * @var string
 */
  public $text_ticket_code = '';

  /**
 * Name of the event the ticket is for.
 *
 * @post result,error
 * @var string
 */
  public $text_title = '';
}

?>