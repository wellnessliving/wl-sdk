<?php

namespace WellnessLiving\Wl\Widget\Analytics;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\Service\ServiceSid;

/**
 * Receives versioned analytics events from React Widgets and SDK applications.
 *
 * @method WlModelRequest post() Accepts a Widget analytics event.  Validates the event envelope and payload, stores the event, and schedules asynchronous processing.
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
   *       <dt>int|null `id_purchase_item`</dt>
   *       <dd>
   *         Purchase item ID.
   * 
   * Required when the parent checkout type is
   * {@link \Wl\Widget\Analytics\WidgetAnalyticsCheckoutTypeSid::STORE_PURCHASE}; `null` for
   *
   *       </dd>
   * 
   *       <dt>int|null `id_service`</dt>
   *       <dd>
   *         Service ID.
   * 
   * Required when checkout type is
   * {@link \Wl\Widget\Analytics\WidgetAnalyticsCheckoutTypeSid::BOOKING}; `null` for
   *
   *       </dd>
   * 
   *       <dt>string|null `k_enrollment_block`</dt>
   *       <dd>
   *         Enrollment block key for an event item.
   * Empty for all other item types.
   * 
   * Required when checkout type is
   * {@link \Wl\Widget\Analytics\WidgetAnalyticsCheckoutTypeSid::BOOKING} and the item type is
   * {@link ServiceSid::EVENT}; `null` for all other item types.
   *       </dd>
   * 
   *       <dt>string `k_item`</dt>
   *       <dd>
   *         Selected item key.
   * 
   * When {@link \Wl\Widget\Analytics\AbandonedCheckout\AbandonedCheckoutItemEntity::$id_purchase_item} is:
   * - {@link WlPurchaseItemSid::COUPON}, this is a coupon key. Primary key in {@link \RsCouponSql}.
   * - {@link WlPurchaseItemSid::ENROLLMENT}, this is an event class key. Primary key in {@link \RsClassSql}.
   * - {@link WlPurchaseItemSid::PRODUCT}, this is a product key. Primary key in {@link \RsShopProductSql}.
   * - {@link WlPurchaseItemSid::PROMOTION}, this is a Purchase Option key. Primary key in {@link \RsPromotionSql}.
   * 
   * When {@link \Wl\Widget\Analytics\AbandonedCheckout\AbandonedCheckoutItemEntity::$id_service} is:
   * - {@link ServiceSid::APPOINTMENT}, this is a service key. Primary key in {@link \RsServiceSql}.
   * - {@link ServiceSid::BOOKABLE_ASSET}, this is an asset key. Primary key in {@link \RsResourceSql}.
   * - {@link ServiceSid::CLASSES} or {@link ServiceSid::EVENT}, this is a class key. Primary key in
   *
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_checkout_type`</dt>
   *   <dd>Checkout type.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key.</dd>
   * 
   *   <dt>string|null `k_skin`</dt>
   *   <dd>Widget skin key.
   * `null` if the Widget does not use a registered skin.</dd>
   * 
   *   <dt>string `m_total`</dt>
   *   <dd>Checkout total in the location currency.</dd>
   * 
   *   <dt>string `s_funnel_step`</dt>
   *   <dd>Last funnel step reached by the client.
   * Empty if it is unavailable.</dd>
   * 
   *   <dt>string `s_session_id`</dt>
   *   <dd>
   *     Widget checkout session identifier.
   * Empty if it is unavailable. It is used only for diagnostics and continuation context, not for idempotency.
   *   </dd>
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
   * 
   *   <dt>string `url_continue`</dt>
   *   <dd>URL that restores the booking or purchase flow with the selected items.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_payload = [];

  /**
   * Event schema version.
   *
   * @post post
   * @var int
   */
  public $i_event_version = 1;

  /**
   * Event name. Initially only {@link WidgetAnalyticsEventSid::ABANDONED_CHECKOUT} is supported.
   *
   * @post post
   * @var int
   */
  public $id_event_name = 0;

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