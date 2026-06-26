<?php

namespace WellnessLiving\Wl\Alert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to save alert settings for the user.
 *
 * @method WlModelRequest post() Save alert settings for the user.
 */
class AlertSettingModel extends WlModelAbstract
{
  /**
   * CID of alert.
   *
   * @post post
   * @var int
   */
  public $cid_alert = 0;

  /**
   * Determines whether the user wish to see all alerts, only their alerts, or none.
   *
   * @post post
   * @var int
   */
  public $id_receive = 0;

  /**
   * Determines whether the user wish to hear a sound when a new alert is added.
   *
   * @post post
   * @var bool
   */
  public $is_sound = true;

  /**
   * Key of the business to save alert settings in.
   *
   * @post post
   * @var string
   */
  public $k_business = '';
}

?>