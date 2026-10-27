<?php

namespace WellnessLiving\Wl\User\Referrer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsRewardScoreSid;

/**
 * Returns referral statistics for a user within a business.
 *
 * Provides the count of referred users, total reward points earned from referrals, and
 * a shareable invite link. The link encodes the referrer's user key so that when a new
 * client registers via the link, the "Referred By" field is pre-filled.
 *
 * @method WlModelRequest get() Returns referral count, total referral points, and shareable referral link for the given user.  Computes result fields for the referrer identified:  - number of invited referrals;  - reward points earned for referral registrations;  - the shareable invite link with the referrer's encrypted user key.
 */
class ReferralInfoModel extends WlModelAbstract
{
  /**
   * Total reward points earned by this user for referral registration ({@link RsRewardScoreSid::REFER_REGISTER}).
   *
   * @get result
   * @var int
   */
  public $i_point = 0;

  /**
   * Number of invited referrals.
   *
   * @get result
   * @var int
   */
  public $i_referral = 0;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User key of the referrer whose statistics are being requested.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * Shareable invite link for the referrer.
   *
   * Navigates to the business registration page with the referrer's encrypted user key as the
   *  `s_referral` parameter. When a new client registers through this link, the "Referred By"
   *  field is pre-filled with this user.
   *
   * @get result
   * @var string
   */
  public $url_referral = '';
}

?>