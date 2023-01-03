<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;

/**
 * Returns detailed information about a single client activity.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * The date of the activity in GMT.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * The date of the activity in the local user timezone.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * The total amount of rewards points the user got for the activity.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $i_score = null;

  /**
   * The rewards points spent to redeem a prize.
   *
   * It is `null` if not loaded yet.
   *
   * See server-side documentation for additional links.
   *
   * @get result
   * @var int|null
   */
  public $i_spend = null;

  /**
   * The ID of the icon that should be shown for this activity;
   * One of {@link WlDesignIconSid} constants.
   * This will be empty if there are no special icons for this activity.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $id_icon = null;

  /**
   * The ID of the activity item that is returned by this model.
   * One of {@link WlLoginActivityTypeSid} constants.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $id_type = null;

  /**
   * The key of the activity item that is being represented by this model.
   *
   * It is `null` if ID is not yet selected.
   *
   * @get get
   * @var string|null
   */
  public $k_login_activity = null;

  /**
   * The description of the activity. It should include who was involved and the nature of the activity.
   *
   * It is `null` if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_message = null;
}

?>