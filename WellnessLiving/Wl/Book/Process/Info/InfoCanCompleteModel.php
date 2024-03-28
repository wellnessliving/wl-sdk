<?php

namespace WellnessLiving\Wl\Book\Process\Info;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that checks for `next` and `complete` buttons in the booking process.
 */
class InfoCanCompleteModel extends WlModelAbstract
{
  /**
   * A list of sessions of an event that can be booked together.
   *
   * This is the same as {@link InfoCanCompleteModel::$a_session_select_post}, but limited by query string
   * length and might fail if the user is booking more than 50 sessions at once. Therefore, using the POST method is preferable.
   *
   * @get get
   * @var array[]
   * @deprecated Use {@link InfoCanCompleteModel::$a_session_select_post} along with POST call instead.
   */
  public $a_session_select = [];

  /**
   * A list of sessions of an event that can be booked together.
   *
   * Every element has the next structure:
   * <dl>
   *   <dt>string <var>dt_date</var></dt>
   *   <dd>The date and time in MySQL format in GMT when the session starts.</dd>
   *   <dt>bool <var>is_select</var></dt>
   *   <dd>`true` if this session should be booked, `false` otherwise.</dd>
   *   <dt>string <var>k_class_period</var></dt>
   *   <dd>The class period key.</dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_session_select_post = [];

  /**
   * Determines whether users can complete the booking process from the info step.
   *
   * @get result
   * @post result
   * @var bool
   */
  public $can_complete;

  /**
   * The date and time of the session that the user is booking, returned in MySQL format and in GMT.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * `true` if price for the individual session should be hidden, if client has applicable pricing option to pay for this
   * booking.
   * `false` if price should be shown always.
   *
   * @get result
   * @var bool
   */
  public $hide_price = '';

  /**
   * Key of the business in which the booking is performed.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The class period ID that the user started to book.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '';

  /**
   * The unique booking process key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $s_id = '';

  /**
   * The key of a user who is making the booking.
   * Empty if user is a guest.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>