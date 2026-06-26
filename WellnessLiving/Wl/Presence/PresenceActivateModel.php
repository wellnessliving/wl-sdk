<?php

namespace WellnessLiving\Wl\Presence;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage actions of sms history report.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class PresenceActivateModel extends WlModelAbstract
{
  /**
   * ID of the plan to be activated.
   *
   * @post post
   * @var int
   */
  public $id_website = 1;

  /**
   * Whether business does not have a subscription.
   *
   * @post result
   * @var bool
   */
  public $is_prospect = true;

  /**
   * Whether email has been sent in 24 hours.
   *
   * @post result
   * @var bool
   */
  public $is_sent = false;

  /**
   * Key of the business, where client want to activate website.
   *
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>