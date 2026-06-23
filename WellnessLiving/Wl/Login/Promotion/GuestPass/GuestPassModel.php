<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlProgramSid;

/**
 * API for managing guest passes.
 */
class GuestPassModel extends WlModelAbstract
{
  /**
   * Guest pass information.
   *
   * <dl>
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     Thumbnail image data for the guest promotion.
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>Image height.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Image width.</dd>
   * 
   *       <dt>string `url-thumbnail`</dt>
   *       <dd>Thumbnail url.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array|null `a_period_dl`</dt>
   *   <dd>
   *     Start and end dates of the current reset period.
   *   `null` if there is no reset period or the reset date is unavailable.
   *     <dl>
   *       <dt>string `dl_end`</dt>
   *       <dd>Period end date in MySQL date format.</dd>
   * 
   *       <dt>string `dl_start`</dt>
   *       <dd>Period start date in MySQL date format.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_settings`</dt>
   *   <dd>
   *     Guest pass settings.
   * Empty array when the guest pass has no settings (class-type passes).
   *     <dl>
   *       <dt>int `i_claim_day`</dt>
   *       <dd>
   *         Count of days for accept guest invite.
   * 
   * If the invitation is not accepted within this time, it will be canceled.
   *       </dd>
   * 
   *       <dt>int `i_limit`</dt>
   *       <dd>Times that member can invite the same guest.</dd>
   * 
   *       <dt>int `i_limit_duration`</dt>
   *       <dd>
   *
   *       </dd>
   * 
   *       <dt>int `id_limit_duration`</dt>
   *       <dd>
   * One of {@link ADurationSid} constants.
   *       </dd>
   * 
   *       <dt>bool `is_checkin`</dt>
   *       <dd>Whether guests can only enter the gym when the inviting member is checked in.</dd>
   * 
   *       <dt>bool `is_limit`</dt>
   *       <dd>Whether there are limits for a guest promotion.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_invite`</dt>
   *   <dd>`true` if the guest pass is invite-type (the member sends invitations to guests).</dd>
   * 
   *   <dt>bool `can_send`</dt>
   *   <dd>`true` if the member can currently send a guest pass (eligible and within quota).</dd>
   * 
   *   <dt>string|null `dl_reset`</dt>
   *   <dd>Date on which the pass resets or expires, in MySQL date format.
   * `null` if no expiry date is determined.</dd>
   * 
   *   <dt>bool `has_service`</dt>
   *   <dd>`true` if the guest pass is service-type (not invite-type). Inverse of `can_invite`.</dd>
   * 
   *   <dt>int|null `i_cap_day`</dt>
   *   <dd>Maximum guest passes that can be sent per day. `null` if there is no daily cap.</dd>
   * 
   *   <dt>int|null `i_limit`</dt>
   *   <dd>Total number of guest passes initially granted. `null` if the supply is unlimited.</dd>
   * 
   *   <dt>int|null `i_period`</dt>
   *   <dd>
   *     Numeric length of the reset period (for example `1` for a one-month period).
   * `null` if the promotion has no reset period.
   *   </dd>
   * 
   *   <dt>int|null `i_remain`</dt>
   *   <dd>Number of guest passes remaining in the current period.
   * `null` if the supply is unlimited.</dd>
   * 
   *   <dt>int|null `i_remain_day`</dt>
   *   <dd>Number of guest passes remaining today per the daily cap.
   * `null` if there is no daily cap.</dd>
   * 
   *   <dt>int `i_use`</dt>
   *   <dd>Number of accepted invitations for this guest pass.</dd>
   * 
   *   <dt>int|null `id_period`</dt>
   *   <dd>
   *     Unit of the reset period. One of {@link ADurationSid} constants.
   * `null` if the promotion has no reset period.
   *   </dd>
   * 
   *   <dt>int `id_program_guest`</dt>
   *   <dd>Guest pass program ID.
   * One of {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>int `id_reset_type_guest`</dt>
   *   <dd>Reset type of the host promotion.</dd>
   * 
   *   <dt>bool `is_expire_note`</dt>
   *   <dd>`true` if the pass is close enough to its reset or expiry date that the UI should
   * display a warning.</dd>
   * 
   *   <dt>bool `is_reset`</dt>
   *   <dd>`true` if the remaining count resets on `dl_reset`;
   * `false` if the pass expires on that date.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.
   * </dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>Login promotion key of the host membership.
   * </dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>Guest promotion key.
   * </dd>
   * 
   *   <dt>string `text_location`</dt>
   *   <dd>
   *     Comma-separated list of location titles where the promotion is valid.
   * Empty when the promotion is business-wide.
   *   </dd>
   * 
   *   <dt>string `text_owner`</dt>
   *   <dd>Full name of the membership owner.</dd>
   * 
   *   <dt>string `text_period`</dt>
   *   <dd>Human-readable reset period label (e.g. "1 month").
   * Empty when there is no reset period.</dd>
   * 
   *   <dt>string `text_period_date`</dt>
   *   <dd>
   *     Human-readable date range of the current period (e.g. "Jan 1 - Jan 31").
   * Empty when there is no reset period or the reset date is unavailable.
   *   </dd>
   * 
   *   <dt>string `text_promotion_grant`</dt>
   *   <dd>Title of the host (granting) promotion.</dd>
   * 
   *   <dt>string `text_promotion_guest`</dt>
   *   <dd>Title of the guest promotion.</dd>
   * 
   *   <dt>string `uid_owner`</dt>
   *   <dd>User key of the membership owner.
   * </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_guest_pass = [];

  /**
   * Number of guest passes remaining for the current period.
   *
   * @put post
   * @var int
   */
  public $i_adjust = 0;

  /**
   * Business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Login promotion key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_login_promotion = '';
}

?>