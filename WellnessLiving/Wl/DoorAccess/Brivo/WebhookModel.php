<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Public endpoint that receives inbound door-access events from Brivo.
 *
 *  Brivo sends an HTTP POST here for every subscribed `AUDIT` event. The request carries no WellnessLiving
 *  session; it is authenticated by a per-business secret token ({@link BrivoAccountSql}
 *  `s_token_webhook`) embedded in the webhook URL. The decoded payload is handed to
 *
 * @method WlModelRequest post()
 */
class WebhookModel extends WlModelAbstract
{
  /**
   * Business the webhook belongs to. Taken from the webhook URL.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Secret token from the webhook URL used to authenticate the Brivo request.
   *
   * @get get
   * @var string
   */
  public $s_token = '';
}

?>