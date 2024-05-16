<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Login\WlLoginActivityTypeSid;
use WellnessLiving\Wl\WlDesignIconSid;

/**
 * Returns detailed information about a single client activity.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Messages with description what did user do to get account credits as reward points.
   *
   * @get result
   * @var string[]
   */
  public $a_credit_score;

  /**
   * Messages with description what did user do to get points.
   *
   * @get result
   * @var string[]
   */
  public $a_reward_score;

  /**
   * Verifies that current user can view the specified profile.
   *
   * @get result
   * @var bool
   */
  public $can_profile;

  /**
   * The date of the activity in GMT.
   *
   * @get result
   * @var string
   */
  public $dt_date_gmt;

  /**
   * The date of the activity in the client's time zone.
   *
   * @get result
   * @var string
   */
  public $dt_date_local;

  /**
   * Description of the action, who and what did.
   *
   * @get result
   * @var string
   */
  public $html_message;

  /**
   * Total amount of account credits user got for {@link ElementModel::$k_login_activity}. This field is a copy of result of {@link \RsLoginActivity::reward()}.
   *
   * @get result
   * @var int
   */
  public $i_credit_score;

  /**
   * The total amount of rewards points the client received for the activity.
   *
   * @get result
   * @var int
   */
  public $i_score;

  /**
   * The rewards points used to redeem a prize.
   *
   * @get result
   * @var int
   */
  public $i_spend;

  /**
   * The ID of the icon that should be shown for this activity. One of {@link WlDesignIconSid} constants.
   *
   * This will be `null` is no special icon for this activity.
   *
   * @get result
   * @var int|null
   */
  public $id_icon;

  /**
   * The ID of the activity item returned by this endpoint. One of {@link WlLoginActivityTypeSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_type;

  /**
   * Object ID, for example, class period ID for books and visits.
   *
   * @get result
   * @var string
   */
  public $k_id;

  /**
   * The key of the activity item represented by this endpoint.
   *
   * @get get
   * @var string
   */
  public $k_login_activity = '0';

  /**
   * The description of the activity. This should include the nature of the activity and the people involved.
   *
   * @get result
   * @var string
   */
  public $s_message;

  /**
   * Link to share activity with social networks.
   *
   * @get result
   * @var string
   */
  public $url_link;
}

?>