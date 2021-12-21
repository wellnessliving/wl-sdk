<?php

namespace WellnessLiving\Wl\Login\Attendance\Add;

use WellnessLiving\WlModelAbstract;

/**
 * Adds client to attendance list.
 */
class AddModel extends WlModelAbstract
{
  /**
   * User's promotion are suitable to pay for session. Every element has keys:
   * <dl>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>Login promotion key, available to pay for the session, primary key in {@link \RsLoginPromotionSql}.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Login promotion title.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_login_promotion = [];

  /**
   * User's promotion are suitable to pay for session. Every element has keys:
   * <dl>
   *   <dt>string <var>k_session_pass</var></dt>
   *   <dd>Session pass key, available to pay for the session.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Session pass title.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_session_pass = [];

  /**
   * Start date and time of the class in MySQL format in GMT.
   *
   * <tt>null</tt> means not set.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_global = null;

  /**
   * Adding type ID, one of {@link \WellnessLiving\Wl\Login\Attendance\AddOptionSid}.
   *
   * @post post
   * @var int
   */
  public $id_add_option = 0;

  /**
   * WellnessLiving mode type, one of {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * Visit status, one of {@link \Wl\Visit\VisitSid} constants.
   *
   * @post result
   * @var int
   */
  public $id_visit = 0;

  /**
   * <tt>true</tt> - session is free (no ways to pay); <tt>false</tt> - session is chargeable.
   *
   * @get result
   * @var boolean
   */
  public $is_free = false;

  /**
   * Indicates that visit was automatically paid in any available way during booking.
   *
   * @post result
   * @var boolean
   */
  public $is_paid = false;

  /**
   * Class period key.
   *
   * <tt>null</tt> means not set.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = null;

  /**
   * Key of user's promotion to be used for booking.
   * If empty, use any suitable user's promotion.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '0';

  /**
   * Key of unused single session payment is suitable to pay for session.
   * <tt>0</tt> if no such payment is available.
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_session_pass = '0';

  /**
   * Booked visit key.
   *
   * @post result
   * @var string
   */
  public $k_visit = '0';

  /**
   * Price of the session, including taxes and discount.
   *
   * <tt>null</tt> means not loaded yet.
   *
   * @get result
   * @var string
   */
  public $m_price = null;

  /**
   * User's account balance after charging {@link Wl_Login_Attendance_Add_AddModel.m_price} amount.
   *
   * <tt>null</tt> means not loaded yet.
   *
   * @get result
   * @var string
   */
  public $m_rest = null;

  /**
   * Current user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_client = '0';

  /**
   * Url link to store, to pay for the visit.
   *
   * This link is for Web only.
   *
   * @post result
   * @var string
   */
  public $url_store = '';
}

?>