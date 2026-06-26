<?php

namespace WellnessLiving\Wl\Login\Promotion\Cancel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * API for receiving basic notification pattern setting.
 *
 * @method WlModelRequest get() Prepares notification pattern data of cancelled promotion.
 */
class NotificationPatternModel extends WlModelAbstract
{
  /**
   * Date now (local).
   *
   * @get result
   * @var string
   */
  public $dl_now = '';

  /**
   * `true` if there are active upcoming visits paid with the membership we are going to cancel.
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $has_upcoming_visits = false;

  /**
   * Policy, whether client can use remaining visits after cancellation or not.
   *
   * @get result
   * @var int
   */
  public $id_cancel_policy = 0;

  /**
   * Mail confirmation enabled. <tt>true</tt> when mail confirmation enabled, <tt>false</tt> otherwise.
   *
   * <tt>null</tt> when not initialized.
   *
   * @get result
   * @var bool|null
   */
  public $is_inform_mail = null;

  /**
   * Push confirmation enabled. <tt>true</tt> when push confirmation enabled, <tt>false</tt> otherwise.
   *
   * <tt>null</tt> when not initialized.
   *
   * @get result
   * @var bool|null
   */
  public $is_inform_push = null;

  /**
   * SMS confirmation enabled. <tt>true</tt> when sms confirmation enabled, <tt>false</tt> otherwise.
   *
   * <tt>null</tt> when not initialized.
   *
   * @get result
   * @var bool|null
   */
  public $is_inform_sms = null;

  /**
   * The key of the business to which the promotion belongs.
   *
   * <tt>null</tt> when not initialized.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of login promotion to update options for.
   *
   * <tt>null</tt> when not initialized.
   *
   * @get get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * Cancellation fee amount.
   *
   * `null` if no need charge fee.
   *
   * @get result
   * @var string|null
   */
  public $m_terminate_fee = null;

  /**
   * SID of notification form.
   *
   * @get result
   * @var string
   */
  public $sid_mail = '';

  /**
   * Option type. String representation of one from {@link WlProgramTypeSid} class constants.
   *
   * @get result
   * @var string
   */
  public $sid_option_type = '';

  /**
   * Key of the user performing the request.
   *
   * <tt>null</tt> when not initialized.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>