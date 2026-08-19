<?php

namespace WellnessLiving\Wl\Widget\Analytics;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\Service\ServiceSid;

/**
 * Receives versioned analytics events from React Widgets and SDK applications.
 *
 * @method WlModelRequest post() Accepts a Widget analytics event.  Validates the event envelope and payload. `begin_checkout` and `abandoned_checkout` events are stored and scheduled for asynchronous processing. A `purchase` event marks pending checkout events for the same client and checkout type as checkout-complete, so the "Abandoned checkout" trigger stops enrolling the client for them.
 */
class WidgetAnalyticsEventModel extends WlModelAbstract
{
  /**
   * Event-specific payload.
   *
   * <dl>
   *   <dt>array[] `a_item`</dt>
   *   <dd>
   *     Selected checkout items.
   *     <dl>
   *       <dt>string|null `dtu_session`</dt>
   *       <dd>Selected booking session datetime.
   * `null` if not available.</dd>
   * 
   *       <dt>int `i_order`</dt>
   *       <dd>Zero-based item order in the checkout list.</dd>
   * 
   *       <dt>int `i_quantity`</dt>
   *       <dd>Quantity of selected items.</dd>
   * 
   *       <dt>int|null `id_purchase_item`</dt>
   *       <dd>
   *         Purchase item ID.
   * See {@link WlPurchaseItemSid}.
   * 
   * Required when the parent checkout type is
   * {@link WidgetAnalyticsCheckoutTypeSid::STORE_PURCHASE}; `null` for
   * {@link WidgetAnalyticsCheckoutTypeSid::BOOKING}.
   *       </dd>
   * 
   *       <dt>int|null `id_service`</dt>
   *       <dd>
   *         Service ID.
   * See {@link ServiceSid}.
   * 
   * Required when checkout type is
   * {@link WidgetAnalyticsCheckoutTypeSid::BOOKING}; `null` for
   * {@link WidgetAnalyticsCheckoutTypeSid::STORE_PURCHASE}.
   *       </dd>
   * 
   *       <dt>string|null `k_class_period`</dt>
   *       <dd>
   *         Selected class period key for classes/events booking items.
   * `null` if class period is not specified or not applicable.
   *       </dd>
   * 
   *       <dt>string `k_item`</dt>
   *       <dd>
   *         Selected item key.
   * 
   * When {@link \Wl\Widget\Analytics\CheckoutSnapshotItemEntity::$id_purchase_item} is:
   * - {@link WlPurchaseItemSid::COUPON}, this is a coupon key.
   * - {@link WlPurchaseItemSid::ENROLLMENT}, this is an event class key.
   * - {@link WlPurchaseItemSid::PRODUCT}, this is a product option key.
   * - {@link WlPurchaseItemSid::PROMOTION}, this is a Purchase Option key.
   * 
   * When {@link \Wl\Widget\Analytics\CheckoutSnapshotItemEntity::$id_service} is:
   * - {@link ServiceSid::APPOINTMENT}, this is a service key.
   * - {@link ServiceSid::BOOKABLE_ASSET}, this is an asset key.
   * - {@link ServiceSid::CLASSES} or {@link ServiceSid::EVENT}, this is a class key.
   *       </dd>
   * 
   *       <dt>string|null `m_price`</dt>
   *       <dd>Checkout item price in the location currency.
   * `null` if not available.</dd>
   * 
   *       <dt>string `text_service_name`</dt>
   *       <dd>Item name snapshot from checkout.</dd>
   * 
   *       <dt>string `uid_staff`</dt>
   *       <dd>Selected staff user key.
   * Empty if staff was not selected.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_checkout_type`</dt>
   *   <dd>Checkout type.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key.</dd>
   * 
   *   <dt>string `m_total`</dt>
   *   <dd>Checkout total in the location currency.</dd>
   * 
   *   <dt>string `s_funnel_step`</dt>
   *   <dd>Last funnel step reached by the client.
   * Empty if it is unavailable.</dd>
   * 
   *   <dt>string `s_session_id`</dt>
   *   <dd>Widget checkout session identifier.
   * Used for diagnostics and continuation context, not for idempotency.</dd>
   * 
   *   <dt>string `s_utm_campaign`</dt>
   *   <dd>UTM campaign value.
   * Empty if it is unavailable.</dd>
   * 
   *   <dt>string `s_utm_medium`</dt>
   *   <dd>UTM medium value.
   * Empty if it is unavailable.</dd>
   * 
   *   <dt>string `s_utm_source`</dt>
   *   <dd>UTM source value.
   * Empty if it is unavailable.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key for whom checkout was abandoned.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_payload = [];

  /**
   * Event name.
   *
   * @post post
   * @var int
   */
  public $id_event_name = 0;

  /**
   * Event schema version. Currently only {@link WidgetAnalyticsEventVersionSid::V1} is supported.
   *
   * @post post
   * @var int
   */
  public $id_event_version = 1;

  /**
   * Business key used for shard and datacenter routing.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Client-generated idempotency identifier.
   * A retry of the same logical event must use the same value.
   *
   * @post post
   * @var string
   */
  public $s_event_id = '';
}

?>