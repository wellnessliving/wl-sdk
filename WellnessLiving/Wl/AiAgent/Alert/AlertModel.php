<?php

namespace WellnessLiving\Wl\AiAgent\Alert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to fire an in-app alert for an event triggered by the AI Agent.
 *
 * This endpoint is not public and can be used only by the AI agent.
 *
 * @method WlModelRequest post() Fires an in-app alert for the specified event.  Triggers the alert that appears in the business `Alert Center` for staff members with appropriate access. Requires the business to have an active `AI Agent` subscription.
 */
class AlertModel extends WlModelAbstract
{
  /**
   * CID of the alert to be fired.
   *
   * @post post
   * @var int
   */
  public $cid_alert = 0;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Conversation link assigned by the `AI Agent`.
   *
   * @post post
   * @var string
   */
  public $url_conversation = '';
}

?>