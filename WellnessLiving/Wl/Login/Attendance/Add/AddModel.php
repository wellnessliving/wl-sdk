<?php

namespace WellnessLiving\Wl\Login\Attendance\Add;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that adds a client to an attendance list.
 * This endpoint can also be used to get a list of Purchase Options suitable to pay for the session in question.
 */
class AddModel extends WlModelAbstract
{
  /**
   * Any of the client’s memberships that can be used to pay for the session.
   * Every element is an array with the following keys:
   * <dl>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The login promotion key, available to pay for the session.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The title of the login promotion.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_login_promotion = [];

  /**
   * Any user's session passes that can be used to pay for the session.
   * Every element is an array with the following keys:
   * <dl>
   *   <dt>string <var>k_session_pass</var></dt>
   *   <dd>The session pass key, available to pay for the session.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The title of the session pass.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_session_pass = [];

  /**
   * The start date and time of the class in GMT and MySQL format.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_global = null;

  /**
   * Determines how the payment was handled for the session.
   * One of the {@link \WellnessLiving\Wl\Login\Attendance\AddOptionSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_add_option = 0;

  /**
   * Determines how the session was booked. One of the {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   * We recommend using the `WEB_BACKEND` value.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * The status of the visit. One of the {@link \Wl\Visit\VisitSid} constants.
   *
   * @post result
   * @var int
   */
  public $id_visit = 0;

  /**
   * If `true`, the session is free with no methods of payment. If `false`, the session can be paid for.
   *
   * @get result
   * @var boolean
   */
  public $is_free = false;

  /**
   * If `true`, the visit was automatically paid for in any available way during the booking.
   * If `false`, the visit wasn't automatically paid for.
   *
   * @post result
   * @var boolean
   */
  public $is_paid = false;

  /**
   * The class period key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = null;

  /**
   * The key of the user's promotion to be used for booking.
   * If empty, use any suitable user's promotion.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '0';

  /**
   * The key of a session pass that can be used for a single session payment.
   * If no such payment is available, `0` will be returned.
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_session_pass = '0';

  /**
   * The key of the booked visit. This will be set on success.
   * This value will be needed if the session still needs to be paid for.
   *
   * @post result
   * @var string
   */
  public $k_visit = '0';

  /**
   * The price of the session, including any taxes and discounts.
   *
   * If `null`, the price of the session hasn't been loaded yet.
   *
   * @get result
   * @var string
   */
  public $m_price = null;

  /**
   * The user's account balance if they were charged the {@link m_price} amount.
   *
   * If `null`, the account balance hasn't been loaded yet.
   *
   * @get result
   * @var string
   */
  public $m_rest = null;

  /**
   * The client’s user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_client = '0';

  /**
   * The URL link to the store to allow for the payment of the visit.
   *
   * This link is for web only.
   *
   * @post result
   * @var string
   */
  public $url_store = '';
}

?>