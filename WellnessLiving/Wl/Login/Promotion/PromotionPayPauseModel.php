<?php

namespace WellnessLiving\Wl\Login\Promotion;

use WellnessLiving\WlModelAbstract;

/**
 * Manages or retrieves information about holds on Purchase Options.
 *
 * The DELETE method can remove a hold.
 * The GET method only returns information about active holds.
 * The POST method can create or edit a hold.
 * The PUT method can edit a hold.
 */
class PromotionPayPauseModel extends WlModelAbstract
{
  /**
   * List of all promotion payment pause periods. Each element has next structure:
   *
   * <tt>null</tt> if {@link PromotionPayPauseModel::$is_list} is false.
   *
   * <dl>
   *   <dt>string|null `dl_create`</dt>
   *   <dd>Date when this hold period was created. <tt>null</tt> for old records.</dd>
   * 
   *   <dt>string `dl_end`</dt>
   *   <dd>
   *     Ending date of the pause (inclusively - this date is paused).
   * This field contains zero date for promotions placed on hold indefinitely.
   *   </dd>
   * 
   *   <dt>string `dl_start`</dt>
   *   <dd>Starting date of the pause (inclusively - this date is paused).</dd>
   * 
   *   <dt>int|null `i_hold_day`</dt>
   *   <dd>Duration of the hold in days. <tt>null</tt> if the hold is ongoing.</dd>
   * 
   *   <dt>bool `is_past`</dt>
   *   <dd>Whether the hold is in past.</dd>
   * 
   *   <dt>string `k_promotion_pay_pause`</dt>
   *   <dd>Key of the hold period. </dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional notes.</dd>
   * 
   *   <dt>string|null `text_user_create`</dt>
   *   <dd>Full name of a user that has created hold period. <tt>null</tt> for old records.</dd>
   * 
   *   <dt>string|null `uid_create`</dt>
   *   <dd>Key of a user that has created hold period. <tt>null</tt> for old records.</dd>
   * </dl>
   * @get result
   * @var array[]|null
   */
  public $a_pay_pause_list = null;

  /**
   * The end date of the current hold, in the local time zone.
   *
   * `null` if it shouldn't be updated.
   *
   * @get get,result
   * @post get
   * @put get
   * @var string|null
   */
  public $dt_end = null;

  /**
   * The start date of the current hold, in the local time zone.
   *
   * `null` if it shouldn't be updated.
   *
   * @get get,result
   * @post get
   * @put get
   * @var string|null
   */
  public $dt_start = null;

  /**
   * The date when the email notification was sent.
   *
   * `null` if it shouldn't be updated.
   *
   * @get result
   * @var string|null
   */
  public $dtu_date_notification = null;

  /**
   * Whether need to get all pause periods for the login promotion.
   * If <tt>true</tt> then {@link PromotionPayPauseModel::$a_pay_pause_list} will be returned.
   * If <tt>false</tt> then information about specified {@link PromotionPayPauseModel::$k_promotion_pay_pause} or
   * currently active pause period will be returned ({@link PromotionPayPauseModel::$dt_start},
   * {@link PromotionPayPauseModel::$dt_end} and {@link PromotionPayPauseModel::$text_note}).
   *
   * @get get
   * @var bool
   */
  public $is_list = false;

  /**
   * Whether or not to send email notification.
   *
   * <tt>false</tt> if not initialized.
   *
   * @get result
   * @post post
   * @put post
   * @var bool
   */
  public $is_mail = false;

  /**
   * Whether or not to send push notification.
   *
   * <tt>false</tt> if not initialized.
   *
   * @get result
   * @post post
   * @put post
   * @var bool
   */
  public $is_push = false;

  /**
   * Whether or not to send SMS notification.
   *
   * <tt>false</tt> if not initialized.
   *
   * @get result
   * @post post
   * @put post
   * @var bool
   */
  public $is_sms = false;

  /**
   * Key of business to which currently handled pause period or login promotion belongs.
   *
   * <tt>null</tt> if not initialized.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The Purchase Option key. If this key is used, a new hold will be created. The endpoint will return a `start-cross`
   * status code if a hold is already in place.
   *
   * Ignored if {@link PromotionPayPauseModel::$k_promotion_pay_pause} is provided.
   *
   * `null` if not yet initialized.
   *
   * @delete get
   * @get get,result
   * @post get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * Key of the email pattern.
   *
   * @get result
   * @var string|null
   */
  public $k_mail_pattern = null;

  /**
   * The promotion payment hold key. If this key is used, it will edit an existing hold.
   * This key will be empty if there's no active hold in place or if a scheduled hold isn't in effect.
   *
   * `null` if not yet initialized or if the request is based on {@link PromotionPayPauseModel::$k_login_promotion}.
   *
   * @delete get
   * @get get,result
   * @post get,result
   * @put get,result
   * @var string|null
   */
  public $k_promotion_pay_pause = null;

  /**
   * Additional notes for the promotion payment pause period.
   * Leave this field as `null` if the note shouldn't be updated.
   *
   * `null` if it shouldn't be updated.
   *
   * @get result
   * @post post
   * @put post
   * @var string|null
   */
  public $text_note = null;
}

?>