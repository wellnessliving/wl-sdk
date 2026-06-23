<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Invite;

use WellnessLiving\WlModelAbstract;

/**
 * API to manage guest pass invitations within a client's membership or client's profile.
 */
class InviteListModel extends WlModelAbstract
{
  /**
   * Guest information.
   *
   * > Used only for `POST` request to send invitation to the guest without account.
   *
   * Required fields:
   *
   * <dl>
   *   <dt>string `text_mail`</dt>
   *   <dd>Email address to which the invitation will be sent.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>Phone number to which the invitation SMS will be sent.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_guest = [];

  /**
   * List of guest pass invitations suitable for the specific request parameters.
   *
   * <dl>
   *   <dt>array `a_guest`</dt>
   *   <dd>
   *     Guest user identity data.
   *     <dl>
   *       <dt>string `text_mail`</dt>
   *       <dd>Guest email address.</dd>
   * 
   *       <dt>string `text_name_first`</dt>
   *       <dd>Guest first name.</dd>
   * 
   *       <dt>string `text_name_last`</dt>
   *       <dd>Guest last name.</dd>
   * 
   *       <dt>string|null `text_phone`</dt>
   *       <dd>Guest phone number, or `null` if not available.</dd>
   * 
   *       <dt>string|null `uid`</dt>
   *       <dd>
   *         Guest user key. 
   * `null` if the guest did not have an account when the invitation was sent.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string|null `dtl_accept`</dt>
   *   <dd>
   *     Acceptance date and time in business timezone in MySQL datetime format.
   * `null` if the invitation has not been accepted.
   *   </dd>
   * 
   *   <dt>string|null `dtl_expire`</dt>
   *   <dd>
   *     Expiry date and time in business timezone in MySQL datetime format.
   * `null` if the invitation has no expiry date.
   *   </dd>
   * 
   *   <dt>string `dtl_invite`</dt>
   *   <dd>Date and time the invitation was sent, in business timezone in MySQL datetime format.</dd>
   * 
   *   <dt>string|null `dtl_redeem`</dt>
   *   <dd>
   *     Redemption date and time in business timezone in MySQL datetime format.
   *    `null` if the invitation has not been redeemed.
   *   </dd>
   * 
   *   <dt>string|null `dtl_reject`</dt>
   *   <dd>
   *     Rejection date and time in business timezone in MySQL datetime format.
   * `null` if the invitation has not been rejected.
   *   </dd>
   * 
   *   <dt>string|null `dtl_visit`</dt>
   *   <dd>Visit date and time in MySQL datetime format.
   * `null` if no visit is associated.</dd>
   * 
   *   <dt>string|null `dtu_accept`</dt>
   *   <dd>Acceptance date and time in UTC in MySQL datetime format.
   * `null` if the invitation has not been accepted.</dd>
   * 
   *   <dt>string|null `dtu_expire`</dt>
   *   <dd>Expiry date and time in UTC in MySQL datetime format.
   *    `null` if the invitation has  no expiry date.</dd>
   * 
   *   <dt>string `dtu_invite`</dt>
   *   <dd>Date and time the invitation was sent, in UTC in MySQL datetime format.</dd>
   * 
   *   <dt>string|null `dtu_redeem`</dt>
   *   <dd>
   *     Redemption date and time in UTC in MySQL datetime format.
   *    `null` if the invitation  has not been redeemed.
   *   </dd>
   * 
   *   <dt>string|null `dtu_reject`</dt>
   *   <dd>Rejection date and time in UTC in MySQL datetime format.
   * `null` if the invitation has not been rejected.</dd>
   * 
   *   <dt>int `id_status`</dt>
   *   <dd>Invitation lifecycle status.</dd>
   * 
   *   <dt>bool|null `is_checkin`</dt>
   *   <dd>
   *     `true` if the guest may only enter when the inviting member is checked in.
   * `null` if no guest pass settings are configured for the promotion.
   *   </dd>
   * 
   *   <dt>bool `is_visit_future`</dt>
   *   <dd>`true` if associated visit in future, `false` otherwise.</dd>
   * 
   *   <dt>string|null `k_login_promotion_guest`</dt>
   *   <dd>
   *     Login promotion key granted to the guest upon acceptance.
   * 
   * `null` if the invitation has not been accepted.
   *   </dd>
   * 
   *   <dt>string `k_login_promotion_host`</dt>
   *   <dd>Login promotion key of the host membership.
   * </dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>Guest promotion key.
   * </dd>
   * 
   *   <dt>string|null `k_visit`</dt>
   *   <dd>
   *     Visit key redeemed with this guest pass.
   * 
   * `null` if no visit is associated.
   *   </dd>
   * 
   *   <dt>string `s_secret`</dt>
   *   <dd>Secret token used to accept or reject the invitation via a direct link.</dd>
   * 
   *   <dt>string|null `text_host_name`</dt>
   *   <dd>Full name of the host user who sent the invitation.
   *    `null` if the host could not be resolved.</dd>
   * 
   *   <dt>string `text_promotion_guest`</dt>
   *   <dd>Title of the guest promotion.</dd>
   * 
   *   <dt>string `text_promotion_host`</dt>
   *   <dd>Title of the host promotion.</dd>
   * 
   *   <dt>string|null `text_service_title`</dt>
   *   <dd>Title of the service booked with the guest pass.
   * `null` if no visit is associated.</dd>
   * 
   *   <dt>string `text_timezone`</dt>
   *   <dd>Name of the business timezone used for all `dtl_*` fields (e.g. "America/New_York").</dd>
   * 
   *   <dt>string|null `uid_host`</dt>
   *   <dd>
   *     User key of the host who sent the invitation.
   * 
   * `null` if the host could not be resolved.
   *   </dd>
   * 
   *   <dt>string `url_service`</dt>
   *   <dd>
   *     URL to the attendance page for the associated class period.
   * Empty string if no visit is associated or the visit is not a class.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * End of the guest pass activity period.
   * Used to filter invitations whose activity moment is on or before this local date.
   *
   * `null` to not filter by period end.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Start of the guest pass activity period.
   * Used to filter invitations whose activity moment is on or after this local date.
   *
   * `null` to not filter by period start.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Whether to include invitations that have already expired or were revoked.
   *
   * @get get
   * @var bool
   */
  public $is_include_expire = false;

  /**
   * Key of the business within which guest pass invitations are managed.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the login promotion which provides the guest pass invitation.
   *
   * > * Used for `GET` to get list of initial invitations for the specific login promotion.
   * > * Used for `POST` to send invitation to the specific user for the specific login promotion.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * Key of the invited user.
   *
   * > * Used for `GET` to get list of incoming invitations for the specific user.
   * > * Used for `POST` to send invitation to the specific user.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid_guest = null;

  /**
   * Key of the host user who sent the invitation.
   *
   * > Used only for `GET` request to get list of outgoing invitations from the specific user.
   *
   * @get get
   * @var string|null
   */
  public $uid_host = null;
}

?>