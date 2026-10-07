<?php

namespace WellnessLiving\Wl\Ticket;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns all tickets and orders of one session of a ticketed event: the data of the check-in list.
 *
 * The whole session is returned at once, without pagination. Cancelled tickets are returned too. Tickets of one order
 * go one after another, in order of their positions. Orders go from the most recent purchase to the oldest one, and
 * tickets follow the same order of orders.
 *
 * Tickets are linked with orders by {@link TicketListModel::$a_ticket} `k_purchase`.
 *
 * Nothing in the answer allows to restore a QR code of a ticket.
 *
 * @method WlModelRequest get() Returns tickets and orders of the session.  Returns every ticket of the session, cancelled ones included, the orders they belong to, the counters of the session, and the data needed to show the session: its name, location, start and end. Requires access of the current staff member to the business.
 */
class TicketListModel extends WlModelAbstract
{
  /**
 * Location of the session. Has the next structure: 
 *
 * <dl>
 *   <dt>string `k_location`</dt>
 *   <dd>Location key.</dd>
 * 
 *   <dt>string `text_title`</dt>
 *   <dd>Title of the location.</dd>
 * </dl>
 * @get result
 * @var array
 */
  public $a_location = [];

  /**
 * Orders of the session, from the most recent purchase to the oldest one. Every item has the next structure: 
 *
 * <dl>
 *   <dt>array[] `a_type`</dt>
 *   <dd>
 *     Ticket types of the order, not counting cancelled tickets. Every item has the next structure:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of not cancelled tickets of this type in the order.</dd>
 * 
 *       <dt>string `k_ticket_option`</dt>
 *       <dd>Key of the ticket type. Key of the ticket type.</dd>
 * 
 *       <dt>string `text_title`</dt>
 *       <dd>Name of the ticket type.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `dtl_purchase`</dt>
 *   <dd>Time when the order was bought, in the local time of the location, MySQL format.</dd>
 * 
 *   <dt>int `i_attend`</dt>
 *   <dd>Number of tickets of the order that are checked in.</dd>
 * 
 *   <dt>int `i_ticket`</dt>
 *   <dd>Number of tickets in the order, cancelled ones included.</dd>
 * 
 *   <dt>bool `is_guest`</dt>
 *   <dd>`true` if the order was bought by a guest, who has no profile. In this case `text_name` is empty.</dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>Number of the order: key of the purchase the tickets were bought with. Key of the purchase.</dd>
 * 
 *   <dt>string `m_total`</dt>
 *   <dd>
 *     Total paid for the tickets of the order, net of refunds, with the currency
 * {@link TicketListModel::$k_currency}. Decimal string.
 *   </dd>
 * 
 *   <dt>string `text_name`</dt>
 *   <dd>Full name of the buyer. Empty for a guest.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_order = [];

  /**
 * Tickets of the session, cancelled ones included. Every item has the next structure: 
 *
 * <dl>
 *   <dt>string|null `dtl_attend`</dt>
 *   <dd>
 *     Time of the check-in, in the local time of the location, MySQL format. `null` if the ticket is not
 * checked in.
 *   </dd>
 * 
 *   <dt>string|null `dtl_cancel`</dt>
 *   <dd>
 *     Time of the cancellation, in the local time of the location, MySQL format. `null` if the ticket is not
 * cancelled.
 *   </dd>
 * 
 *   <dt>int `i_order`</dt>
 *   <dd>Position of the ticket in the order, starting from 1.</dd>
 * 
 *   <dt>int `i_order_size`</dt>
 *   <dd>Number of tickets in the order, cancelled ones included.</dd>
 * 
 *   <dt>bool `is_attend`</dt>
 *   <dd>Whether the ticket is checked in. A cancelled ticket is never checked in.</dd>
 * 
 *   <dt>bool `is_cancel`</dt>
 *   <dd>Whether the ticket is cancelled: voided, or refunded with the seat returned.</dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>Order of the ticket, see {@link TicketListModel::$a_order}.</dd>
 * 
 *   <dt>string `k_ticket_item`</dt>
 *   <dd>Key of the ticket, the one {@link TicketScanModel} takes.</dd>
 * 
 *   <dt>string `k_ticket_option`</dt>
 *   <dd>Key of the ticket type. Key of the ticket type.</dd>
 * 
 *   <dt>string `text_ticket_code`</dt>
 *   <dd>
 *     Number of the ticket: its short code in the format for displaying, for example `4829-1736`. Empty if the
 * ticket has no short code.
 *   </dd>
 * 
 *   <dt>string `text_type`</dt>
 *   <dd>Name of the ticket type.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_ticket = [];

  /**
 * End of the session, in the local time of the location, MySQL format.
 *
 * @get result
 * @var string
 */
  public $dtl_end = '';

  /**
 * Start of the session, in the local time of the location, MySQL format.
 *
 * @get result
 * @var string
 */
  public $dtl_start = '';

  /**
 * Start of the session, in UTC, MySQL format.
 *
 * @get get
 * @var string
 */
  public $dtu_start = '';

  /**
 * Number of tickets of the session that are checked in.
 *
 * @get result
 * @var int
 */
  public $i_attend = 0;

  /**
 * Number of tickets that can be sold for the event.
 *
 * @get result
 * @var int
 */
  public $i_capacity = 0;

  /**
 * Number of tickets sold for the session, not counting cancelled ones.
 *
 * Counts tickets, not buyers.
 *
 * @get result
 * @var int
 */
  public $i_sold = 0;

  /**
 * Whether tickets of the session can still be sold: there are free seats, and the session has not ended.
 *
 * @get result
 * @var bool
 */
  public $is_sell = false;

  /**
 * Business key.
 *
 * @get get
 * @var string
 */
  public $k_business = '';

  /**
 * Key of the class period the session belongs to.
 *
 * @get get
 * @var string
 */
  public $k_class_period = '';

  /**
 * Key of the currency of all amounts of the answer.
 *
 * @get result
 * @var string
 */
  public $k_currency = '';

  /**
 * Total paid for the tickets of the session, net of refunds. Decimal string, in the currency
 * {@link TicketListModel::$k_currency}.
 *
 * @get result
 * @var string
 */
  public $m_total = '0';

  /**
 * Name of the event, with no date in it.
 *
 * @get result
 * @var string
 */
  public $text_title = '';
}

?>