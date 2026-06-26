<?php

namespace WellnessLiving\Wl\Profile\Purchase;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint used to operate specific purchased item.
 *
 * @method WlModelRequest post() Changes state of the purchase option.
 */
class PurchaseItemCancelModel extends WlModelAbstract
{
  /**
   * Additional data. 
   *
   * <dl>
   *   <dt>string `dl_deactivation`</dt>
   *   <dd>Date of a promotion cancellation.</dd>
   * 
   *   <dt>string `k_reason`</dt>
   *   <dd>Reason key.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>Login promotion key.</dd>
   * 
   *   <dt>string `m_fee`</dt>
   *   <dd>Cancellation fee.</dd>
   * 
   *   <dt>string `s_reason`</dt>
   *   <dd>Text not about cancellation reason.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_data = [];

  /**
   * Whether cancellation should influence historical data.
   *
   * `true` to influence historical data.
   * `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_past = false;

  /**
   * Business key specific purchase item belongs to.
   *
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Purchase item key which should be cancelled.
   *
   * @post get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * Purchase item key which should be cancelled.
   *
   * @post get
   * @var string|null
   */
  public $k_purchase_item = null;

  /**
   * Session pass key if an event in a package is being cancelled.
   *
   * @post get
   * @var string|null
   */
  public $k_session_pass_event_component = null;

  /**
   * User key of the purchase item owner.
   *
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>