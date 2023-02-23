<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns detailed information about a single client activity.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * The date of the activity in GMT.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * The date of the activity in the client's time zone.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * The total amount of rewards points the client received for the activity.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $i_score = null;

  /**
   * The rewards points used to redeem a prize.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $i_spend = null;

  /**
   * The ID of the icon that should be shown for this activity. One of {@link WlDesignIconSid} constants.
   * This will be empty if there are no special icons for this activity.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $id_icon = null;

  /**
   * The ID of the activity item returned by this endpoint. One of {@link WlLoginActivityTypeSid} constants.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $id_type = null;

  /**
   * The key of the activity item represented by this endpoint.
   *
   * This will be `null` if the ID isn't set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_login_activity = null;

  /**
   * The description of the activity. This should include the nature of the activity and the people involved.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $s_message = null;
}

?>