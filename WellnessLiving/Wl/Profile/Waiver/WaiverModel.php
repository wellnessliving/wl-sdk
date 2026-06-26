<?php

namespace WellnessLiving\Wl\Profile\Waiver;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get list of subscribed waivers.
 *
 * @method WlModelRequest get() Gets list of subscribed waivers.
 */
class WaiverModel extends WlModelAbstract
{
  /**
   * List of subscribed waivers. Every element has next keys:
   *
   * <dl>
   *   <dt>string `dt_agree_local`</dt>
   *   <dd>Agreement date in business timezone.</dd>
   * 
   *   <dt>string `dt_agree_utc`</dt>
   *   <dd>Agreement date in UTC.</dd>
   * 
   *   <dt>string `html_contract`</dt>
   *   <dd>Contract text.</dd>
   * 
   *   <dt>string `ip_agree`</dt>
   *   <dd>IP address from which agreement was done.</dd>
   * 
   *   <dt>string `url_signature`</dt>
   *   <dd>URL to agreement signature.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_waiver;

  /**
   * Age of minor which documents can be signed by parent or legal guardian.
   *
   * @get result
   * @var int
   */
  public $i_minor_age;

  /**
   * Business to get information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * User to get information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>