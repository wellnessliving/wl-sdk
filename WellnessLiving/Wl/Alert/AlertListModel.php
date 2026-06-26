<?php

namespace WellnessLiving\Wl\Alert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to manage alerts for current user.
 *
 * @method WlModelRequest get() Returns all alerts for the user.
 * @method WlModelRequest post() Sets alerts as already read.
 */
class AlertListModel extends WlModelAbstract
{
  /**
   * List of alerts.
   *
   * @get result
   * @var array[]
   */
  public $a_alert_list = [];

  /**
   * List of alert keys to mark as read.
   * `null` to set all alerts as read.
   *
   * @post post
   * @var string[]|null
   */
  public $a_alert_read = null;

  /**
   * Key of the business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>