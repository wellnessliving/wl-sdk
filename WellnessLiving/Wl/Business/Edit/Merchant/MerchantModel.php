<?php

namespace WellnessLiving\Wl\Business\Edit\Merchant;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;
use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * Manages business merchant processing:
 * - returns detail information about business merchants;
 * - adds/edits merchant settings for specified business.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class MerchantModel extends WlModelAbstract
{
  /**
   * List of business merchants with detail information. Each element has next structure:
   *
   * <dl>
   *   <dt>array `a_merchant`</dt>
   *   <dd>Additional business merchant settings.</dd>
   * 
   *   <dt>array `a_pay_method`</dt>
   *   <dd>
   *     List of supported payment methods:
   *     <dl>
   *       <dt>int `id_pay_method`</dt>
   *       <dd>Id of the payment method. One of {@link WlPayMethodSid} constants.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of the payment method.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_pay_processor`</dt>
   *   <dd>ID payment gateway from {@link WlPayProcessorSid}.</dd>
   * 
   *   <dt>string `k_business_merchant`</dt>
   *   <dd>Key of the business merchant.</dd>
   * 
   *   <dt>string `text_gateway_title`</dt>
   *   <dd>Payment gateway title.</dd>
   * 
   *   <dt>string `text_merchant_id`</dt>
   *   <dd>Merchant ID.</dd>
   * 
   *   <dt>string `text_processor_title`</dt>
   *   <dd>Payment processor title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_business_merchant_list = [];

  /**
   * Contain detail information about business merchant to save.
   *
   * @post post
   * @var array
   */
  public $a_business_merchant_save = [];

  /**
   * Whether its admin.
   *
   * @get result
   * @var bool
   */
  public $is_admin = false;

  /**
   * Business key.
   *
   * <tt>null</tt> if not set.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Specified payment merchant for which detail information should be return.
   *
   * <tt>null</tt> if it is need to return information about all payment processors for specified business.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business_merchant = null;
}

?>