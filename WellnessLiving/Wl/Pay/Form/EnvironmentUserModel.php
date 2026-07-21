<?php

namespace WellnessLiving\Wl\Pay\Form;

use WellnessLiving\Core\a\ACardSystemSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;
use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * Gets information about payment environments for the user.
 *
 * @method WlModelRequest get() Returns information about payment environment.  Called before rendering a payment form to determine which payment methods and card types are available for a given business and location, what surcharges apply, and how the form should behave (tip prompt, optional card save). This endpoint is deprecated; use {@link \Thoth\WlPay\Form\EnvironmentUserApi}  for new integrations.
 */
class EnvironmentUserModel extends WlModelAbstract
{
  /**
   * A list of supported bank card systems.
   * Keys refer to card types based on card numbers (see {@link ACardSystemSid}),
   * and values are IDs of card systems (one of {@link ACardSystemSid} constants).
   *
   * @get result
   * @var array
   */
  public $a_card_system = null;

  /**
   * A list of payment methods enabled for staff members.
   * The ID is one of {@link WlPayMethodSid} constants.
   * The value is always `true`.
   *
   * @get result
   * @var array
   */
  public $a_method_staff = null;

  /**
   * A list of all payment methods that can be used within this business.
   * This array is sorted in the order in which payment methods should be shown to the user.
   * Each element of the array has the following structure:
   *
   * <dl>
   *   <dt>int `id_pay_method`</dt>
   *   <dd>The ID of type of payment method. One of {@link WlPayMethodSid} constants.</dd>
   * 
   *   <dt>bool `is_client`</dt>
   *   <dd>
   *     Determines whether this method is available for clients. This field is only returned for custom payment methods.
   *   </dd>
   * 
   *   <dt>string|null `k_pay_method`</dt>
   *   <dd>
   *     The key of the custom payment method.
   * This will be `null` if this payment method isn't customized.
   * 
   *   </dd>
   * 
   *   <dt>string `s_method`</dt>
   *   <dd>The name of payment method. This field is only returned for custom payment methods.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_method_support = null;

  /**
   * The configuration array that's sent to mobile card reader plugin.
   * The structure of this array depends on the payment processor being used.
   * `null` when mobile card readers are not supported, or when actor has no access to them.
   *
   * Nuvei:
   * <dl>
   *   <dt>array `a_terminal_location`</dt>
   *   <dd>
   *     Terminal configuration keyed by location key.
   * 
   * Present only when at least one location has an active merchant configured.
   * Each value:
   *     <dl>
   *       <dt>array `a_terminal`</dt>
   *       <dd>
   *         Terminal lists grouped by connection type.
   * Both lists contain identical entries - the same terminal appears in both.
   *         <dl>
   *           <dt>array[] `a_terminal_elevate`</dt>
   *           <dd>
   *             Elevate-model terminals. Each element:
   *             <dl>
   *               <dt>bool `can_cancel_swipe_from_pos`</dt>
   *               <dd>Whether swipe can be cancelled from the POS terminal.</dd>
   * 
   *               <dt>int `id_model`</dt>
   *               <dd>Terminal model.</dd>
   * 
   *               <dt>int `id_status`</dt>
   *               <dd>Terminal status.</dd>
   * 
   *               <dt>int `id_type`</dt>
   *               <dd>Terminal type.</dd>
   * 
   *               <dt>string `k_terminal`</dt>
   *               <dd>Terminal key. </dd>
   * 
   *               <dt>string `text_id`</dt>
   *               <dd>Terminal ID assigned by the gateway.</dd>
   * 
   *               <dt>string `text_name`</dt>
   *               <dd>Human-readable terminal label.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>array[] `a_terminal_web`</dt>
   *           <dd>
   *             Ethernet terminals, plus one synthetic `MagTek` USB entry appended last when
   *
   * Each element:
   *             <dl>
   *               <dt>bool `can_cancel_swipe_from_pos`</dt>
   *               <dd>Whether swipe can be cancelled from the POS terminal.</dd>
   * 
   *               <dt>int|null `id_model`</dt>
   *               <dd>
   *                 Terminal model.
   * `null` for the synthetic `MagTek` USB entry.
   *               </dd>
   * 
   *               <dt>int `id_status`</dt>
   *               <dd>Terminal status.</dd>
   * 
   *               <dt>int `id_type`</dt>
   *               <dd>
   *                 Terminal type. One of {@link \Thoth\PayProcessor\Nuvei\Terminal\NuveiTerminalTypeSid} constants, or
   *
   *               </dd>
   * 
   *               <dt>string|null `k_terminal`</dt>
   *               <dd>
   *                 Terminal key. 
   * `null` for the synthetic `MagTek` USB entry.
   *               </dd>
   * 
   *               <dt>string|null `s_serial_number`</dt>
   *               <dd>Always `null`. Present only in the synthetic `MagTek` USB entry.</dd>
   * 
   *               <dt>string `text_id`</dt>
   *               <dd>Terminal ID assigned by the gateway, or `id_type_N` for the synthetic `MagTek` USB entry.</dd>
   * 
   *               <dt>string `text_name`</dt>
   *               <dd>Human-readable terminal label.</dd>
   *             </dl>
   *           </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `text_location_name`</dt>
   *       <dd>Display name of the location.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_cancel_swipe_from_pos`</dt>
   *   <dd>Whether card swipe can be cancelled from the POS terminal.</dd>
   * 
   *   <dt>bool `has_expire_date`</dt>
   *   <dd>Whether the card expiry date entry is required.</dd>
   * 
   *   <dt>bool `has_readers_selection`</dt>
   *   <dd>Whether the card reader selection UI is shown.</dd>
   * 
   *   <dt>bool `is_support_magtek`</dt>
   *   <dd>Whether `MagTek` USB reader is supported.</dd>
   * </dl>
   * 
   * DirectConnect:
   * <dl>
   *   <dt>array[] `a_terminal_location`</dt>
   *   <dd>
   *     Terminal configuration keyed by location key.
   * 
   * Empty array if no terminals are configured.
   * Each value:
   *     <dl>
   *       <dt>array[] `a_terminal`</dt>
   *       <dd>
   *         Terminal lists grouped by connection type:
   *         <dl>
   *           <dt>array[] `a_terminal_elevate`</dt>
   *           <dd>
   *             Elevate-model terminals. Each element:
   *             <dl>
   *               <dt>bool `can_cancel_swipe_from_pos`</dt>
   *               <dd>Whether swipe can be cancelled from the POS terminal.</dd>
   * 
   *               <dt>int `id_model`</dt>
   *               <dd>
   *                 Terminal model.
   *               </dd>
   * 
   *               <dt>int `id_status`</dt>
   *               <dd>Terminal status.</dd>
   * 
   *               <dt>string `k_terminal`</dt>
   *               <dd>Terminal key. </dd>
   * 
   *               <dt>string `s_serial_number`</dt>
   *               <dd>Terminal serial number.</dd>
   * 
   *               <dt>string `text_id`</dt>
   *               <dd>Terminal ID assigned by the gateway.</dd>
   * 
   *               <dt>string `text_name`</dt>
   *               <dd>Human-readable terminal label.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>array[] `a_terminal_web`</dt>
   *           <dd>
   *             Ethernet and USB terminals. Always includes one synthetic `MagTek` USB entry appended last.
   * Each element:
   *             <dl>
   *               <dt>bool `can_cancel_swipe_from_pos`</dt>
   *               <dd>Whether swipe can be cancelled from the POS terminal.</dd>
   * 
   *               <dt>int|null `id_model`</dt>
   *               <dd>
   *                 Terminal model.
   * `null` for the synthetic `MagTek` USB entry.
   *               </dd>
   * 
   *               <dt>int `id_status`</dt>
   *               <dd>Terminal status.</dd>
   * 
   *               <dt>int `id_type`</dt>
   *               <dd>Terminal type.</dd>
   * 
   *               <dt>string|null `k_terminal`</dt>
   *               <dd>
   *                 Terminal key. 
   * `null` for the synthetic `MagTek` USB entry.
   *               </dd>
   * 
   *               <dt>string|null `s_serial_number`</dt>
   *               <dd>Terminal serial number. `null` for the synthetic `MagTek` USB entry.</dd>
   * 
   *               <dt>string `text_id`</dt>
   *               <dd>Terminal ID assigned by the gateway, or `id_type_N` for the synthetic `MagTek` USB entry.</dd>
   * 
   *               <dt>string `text_name`</dt>
   *               <dd>Human-readable terminal label.</dd>
   *             </dl>
   *           </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `text_location_name`</dt>
   *       <dd>Display name of the location.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_cancel_swipe_from_pos`</dt>
   *   <dd>Whether card swipe can be cancelled from the POS terminal.</dd>
   * 
   *   <dt>bool `has_expire_date`</dt>
   *   <dd>Whether the card expiry date entry is required.</dd>
   * 
   *   <dt>bool `has_readers_selection`</dt>
   *   <dd>Whether the card reader selection UI is shown.</dd>
   * 
   *   <dt>int `id_device`</dt>
   *   <dd>Device type identifier.</dd>
   * 
   *   <dt>bool `is_support_magtek`</dt>
   *   <dd>Whether `MagTek` USB reader is supported.</dd>
   * </dl>
   * 
   * StripeCom:
   * <dl>
   *   <dt>array `a_terminal_location`</dt>
   *   <dd>
   *     Terminal configuration keyed by location key.
   * 
   * Empty array if no terminals are configured.
   * Each value:
   *     <dl>
   *       <dt>array `a_terminal`</dt>
   *       <dd>
   *         Terminal lists grouped by connection type:
   *         <dl>
   *           <dt>array[] `a_terminal_elevate`</dt>
   *           <dd>
   *             Elevate-model terminals. Each element:
   *             <dl>
   *               <dt>bool `can_cancel_swipe_from_pos`</dt>
   *               <dd>Whether swipe can be cancelled from the POS terminal.</dd>
   * 
   *               <dt>int `id_model`</dt>
   *               <dd>
   *                 Terminal model.
   *               </dd>
   * 
   *               <dt>int `id_status`</dt>
   *               <dd>Terminal status.</dd>
   * 
   *               <dt>string `k_terminal`</dt>
   *               <dd>Terminal key. </dd>
   * 
   *               <dt>string `s_serial_number`</dt>
   *               <dd>Terminal serial number.</dd>
   * 
   *               <dt>string `text_id`</dt>
   *               <dd>Terminal ID assigned by the gateway.</dd>
   * 
   *               <dt>string `text_name`</dt>
   *               <dd>Human-readable terminal label.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>array[] `a_terminal_web`</dt>
   *           <dd>
   *             Ethernet terminals. Each element:
   *             <dl>
   *               <dt>bool `can_cancel_swipe_from_pos`</dt>
   *               <dd>Whether swipe can be cancelled from the POS terminal.</dd>
   * 
   *               <dt>int `id_model`</dt>
   *               <dd>
   *                 Terminal model.
   *               </dd>
   * 
   *               <dt>int `id_status`</dt>
   *               <dd>Terminal status.</dd>
   * 
   *               <dt>int `id_type`</dt>
   *               <dd>
   *                 Terminal type.
   *               </dd>
   * 
   *               <dt>string `k_terminal`</dt>
   *               <dd>Terminal key. </dd>
   * 
   *               <dt>string `s_serial_number`</dt>
   *               <dd>Terminal serial number.</dd>
   * 
   *               <dt>string `text_id`</dt>
   *               <dd>Terminal ID assigned by the gateway.</dd>
   * 
   *               <dt>string `text_name`</dt>
   *               <dd>Human-readable terminal label.</dd>
   *             </dl>
   *           </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `s_location_id`</dt>
   *       <dd>Stripe location ID assigned by the gateway.</dd>
   * 
   *       <dt>string `text_location_name`</dt>
   *       <dd>Display name of the location.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `has_expire_date`</dt>
   *   <dd>Whether the card expiry date entry is required.</dd>
   * 
   *   <dt>bool `has_readers_selection`</dt>
   *   <dd>Whether the card reader selection UI is shown.</dd>
   * 
   *   <dt>bool `is_support_magtek`</dt>
   *   <dd>Whether `MagTek` USB reader is supported.</dd>
   * </dl>
   * 
   * Nmi:
   * <dl>
   *   <dt>int `id_device`</dt>
   *   <dd>Device type identifier.</dd>
   * 
   *   <dt>string `s_key`</dt>
   *   <dd>NMI SDK key for the card reader plugin.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_mobile_config = null;

  /**
   * Represents information about payment processors.
   *
   * Keys are payment methods IDs, one of {@link WlPayMethodSid} constants.
   *
   * Value is the following array: 
   *
   * `null` if no processors are set up.
   *
   * <dl>
   *   <dt>array|null `a_public_keys`</dt>
   *   <dd>
   *     Public keys configured for this payment processor.
   * 
   * `null` if this payment processor does not support public keys.
   *     <dl>
   *       <dt>string|null `s_checkout`</dt>
   *       <dd>Checkout SDK public key. `null` if 3DS is disabled for this merchant.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array|null `a_public_info`</dt>
   *   <dd>
   *     Public info configured for this payment processor.
   * 
   * `null` if this payment processor does not support public info.
   *     <dl>
   *       <dt>string `s_merchant_site`</dt>
   *       <dd>Merchant site identifier assigned by Nuvei.</dd>
   * 
   *       <dt>string `s_nuvei_id`</dt>
   *       <dd>Nuvei merchant identifier.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `hide_save_source`</dt>
   *   <dd>Whether `save payment method` option should be hidden. `true` if hidden, `false` - otherwise.</dd>
   * 
   *   <dt>int `id_pay_processor`</dt>
   *   <dd>ID of the payment processor. One of {@link WlPayProcessorSid} constants.</dd>
   * 
   *   <dt>null|bool `is_enabled_3ds`</dt>
   *   <dd>
   *     `true` if 3DS should be performed, `false` if 3DS should not be performed. `null` if this is not defined for payment processor.
   * Only for {@link WlPayProcessorSid::NUVEI}
   *   </dd>
   * 
   *   <dt>bool|null `is_test`</dt>
   *   <dd>
   *     `true` if the merchant is in a test mode, `false` otherwise.
   * `null` if this is not defined for payment processor.
   *   </dd>
   * 
   *   <dt>string `k_business_merchant`</dt>
   *   <dd>Key of the business merchant. </dd>
   * </dl>
   * @get result
   * @var array[]|null
   */
  public $a_pay_processor = null;

  /**
   * Current local date in current location {@link EnvironmentModel::$k_location}
   * or business {@link EnvironmentModel::$k_business} if not set location.
   *
   * @get result
   * @var string
   */
  public $dl_now;

  /**
   * Surcharge amount for payment with card represented as a percent of transaction amount.
   *
   * This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $f_surcharge = null;

  /**
   * Surcharge amount for payment with ACH represented as a percent of transaction amount.
   *
   * This will be `null` if the percentage surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $f_surcharge_ach = null;

  /**
   * The locale ID of the business.
   *
   * @get result
   * @var int|null
   */
  public $id_locale = null;

  /**
   * `true` if clients can choose whether their banking and credit card information is saved at checkout,
   * `false` if this information is always saved.
   *
   * @get result
   * @var bool
   */
  public $is_save_optional = false;

  /**
   * Determines whether newly added payment sources should be saved. This will be `true` if payment sources should be saved,
   * `false` if otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_save_source = null;

  /**
   * Whether tips are accepted.
   *
   * @get result
   * @var bool
   */
  public $is_tip = false;

  /**
   * The key of the business to retrieve payment information for.
   *
   * This will be `0` if not set yet.
   * An empty string or `null` if payments are performed with the WellnessLiving system merchant.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the currency to retrieve payment information for.
   *
   * @get get
   * @var string
   */
  public $k_currency = '0';

  /**
   * The key of the location to retrieve payment information for.
   *
   * This will be `0` if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Surcharge amount for payment with card represented as a fixed amount.
   *
   * This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $m_surcharge = null;

  /**
   * Surcharge amount for payment with ACH represented as a fixed amount.
   *
   * This will be `null` if the fixed surcharge amount shouldn't be withdrawn.
   *
   * @get result
   * @var string|null
   */
  public $m_surcharge_ach = null;

  /**
   * The user ID to retrieve payment information for.
   *
   * `null` if not defined.
   *
   * @get get
   * @var string|null
   */
  public $uid_owner = null;
}

?>