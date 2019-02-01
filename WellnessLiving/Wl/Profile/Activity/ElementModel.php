<?php

namespace WellnessLiving\Wl\Profile\Activity;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a login activity element.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Date of activity in GMT.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * Date of activity in local user timezone.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_date_local = null;

  /**
   * Total amount of points user got for the activity.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $i_score = null;

  /**
   * Points spent to redeem a prize.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * See server-side documentation for additional links.
   *
   * @get result
   * @var int|null
   */
  public $i_spend = null;

  /**
   * ID of icon which must be used for this activity.
   * One of {@link WlDesignIconSid} constants.
   * Empty if there are no special icons for this activity.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $id_icon = null;

  /**
   * Activity type.
   * One of {@link WlLoginActivityTypeSid} constants.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var int|null
   */
  public $id_type = null;

  /**
   * ID of activity item that is represented by this model.
   *
   * <tt>null</tt> if ID is not yet selected.
   *
   * @get get
   * @var string|null
   */
  public $k_login_activity = null;

  /**
   * Description of the action, who and what did.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_message = null;
}

?>