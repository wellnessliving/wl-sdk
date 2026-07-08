<?php

namespace WellnessLiving\Wl\Profile\Contract\ContractAll;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get list of subscribed or required contracts of user.
 *
 * @method WlModelRequest get() Gets list of contracts.  Returns every contract the user has subscribed to or is required to agree to for the given  business, including the agreement date, signature link, and contract text.
 */
class ContractAllModel extends WlModelAbstract
{
  /**
   * List of contacts. Every element has next keys:
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
   *   <dt>string `html_title`</dt>
   *   <dd>Purchase item title.</dd>
   * 
   *   <dt>string `ip_agree`</dt>
   *   <dd>IP address from which agreement was done.</dd>
   * 
   *   <dt>string `k_purchase_item`</dt>
   *   <dd>Purchase item key.
   * </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Purchase item title.</dd>
   * 
   *   <dt>string `url_signature`</dt>
   *   <dd>URL to agreement signature.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_contract;

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