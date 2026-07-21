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
   *       <dd>Purchase item ID.
   * A {@link WlPurchaseItemSid} constant for store checkout.</dd>
   * 
   *       <dt>int|null `id_service`</dt>
   *       <dd>Service ID.
   * A {@link ServiceSid} constant for booking.</dd>
   * 
   *       <dt>string `k_enrollment_block`</dt>
   *       <dd>Enrollment block key for an event item.
   * Empty for all other item types.</dd>
   * 
   *       <dt>string `k_item`</dt>
   *       <dd>Selected item key.
   * The referenced table depends on checkout type and item type.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_checkout_type`</dt>
   *   <dd>Checkout type.
   *</dd>
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
   * @field payload
   * @post post
   * @var array
   */
  public $a_payload = [];

  /**
   * Event schema version.
   *
   * @field event_version
   * @post post
   * @var int
   */
  public $i_event_version = 1;

  /**
   * Whether the event was durably accepted for asynchronous processing.
   *
   * @post result
   * @var bool
   */
  public $is_accepted = false;

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
   * @field event_id
   * @post post
   * @var string
   */
  public $s_event_id = '';

  /**
   * Event name. Initially only `abandoned_checkout` is supported.
   *
   * @field event_name
   * @post post
   * @var string
   */
  public $s_event_name = '';
}

?>