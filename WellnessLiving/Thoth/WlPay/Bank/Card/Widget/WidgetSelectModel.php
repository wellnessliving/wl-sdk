<?php

namespace WellnessLiving\Thoth\WlPay\Bank\Card\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Card\CardSystemSid;
use WellnessLiving\Wl\RsPayModeSid;
use WellnessLiving\Wl\WlPayMethodSid;
use WellnessLiving\Wl\WlPayOwnerSid;
use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * Point to get saved bank cards of a user or a business.
 *
 * @method WlModelRequest get() Gets a list of saved bank cards.  Validates the payment method, currency, business, location, and pay owner type, then loads the configured  merchant and returns the list of saved cards available to the given owner. For business owners, a system-wide  merchant must be configured; for users, a business-specific merchant is required.
 */
class WidgetSelectModel extends WlModelAbstract
{
  /**
   * List of saved bank cards.
   *
   * <dl>
   *   <dt>\Thoth\WlPay\Bank\Card\CardTypeEnum|null `eid_card_type`</dt>
   *   <dd>Payment card type enum case. `null` if card type is not set.</dd>
   * 
   *   <dt>int `i_month`</dt>
   *   <dd>Card expiration month.</dd>
   * 
   *   <dt>int `i_year`</dt>
   *   <dd>Card expiration year.</dd>
   * 
   *   <dt>int `id_card_system`</dt>
   *   <dd>Card system ID. One of {@link CardSystemSid} constants.</dd>
   * 
   *   <dt>int `id_card_type`</dt>
   *   <dd>Payment card type ID.</dd>
   * 
   *   <dt>int `id_pay_processor`</dt>
   *   <dd>Payment processor ID. One of {@link WlPayProcessorSid} constants.</dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd>`true` if this card is the default payment method; `false` otherwise.</dd>
   * 
   *   <dt>string `k_pay_address`</dt>
   *   <dd>Billing address key.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>Payment card key.</dd>
   * 
   *   <dt>string `k_pay_recurrent`</dt>
   *   <dd>Recurrent payment token key.</dd>
   * 
   *   <dt>string `k_region`</dt>
   *   <dd>Billing region key.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Card nickname. Auto-generated from card system and masked number if not explicitly set.</dd>
   * 
   *   <dt>string `s_number`</dt>
   *   <dd>Partial card number.</dd>
   * 
   *   <dt>string `sid_card_system`</dt>
   *   <dd>Card system SID. One of {@link CardSystemSid} constants as string.</dd>
   * 
   *   <dt>string `text_city`</dt>
   *   <dd>Billing city.</dd>
   * 
   *   <dt>string `text_country`</dt>
   *   <dd>Country name resolved from the region's parent geo entity. Empty if region has no parent.</dd>
   * 
   *   <dt>string `text_holder`</dt>
   *   <dd>Cardholder name.</dd>
   * 
   *   <dt>string `text_postal`</dt>
   *   <dd>Billing postal code.</dd>
   * 
   *   <dt>string `text_public_token`</dt>
   *   <dd>Public representation of the recurrent payment token, safe for browser output.</dd>
   * 
   *   <dt>string `text_region`</dt>
   *   <dd>Region name resolved from the region key. Empty if no region is set.</dd>
   * 
   *   <dt>string `text_street_1`</dt>
   *   <dd>Billing street address line 1.</dd>
   * 
   *   <dt>string `text_street_2`</dt>
   *   <dd>Billing street address line 2.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_pay_card;

  /**
   * Payment method.
   *
   * @get get
   * @var int
   * @see WlPayMethodSid
   */
  public $id_pay_method = 0;

  /**
   * Payment mode.
   *
   * @get get
   * @var int
   * @see RsPayModeSid
   */
  public $id_pay_mode = 0;

  /**
   * Payment owner kind.
   * Must be {@link WlPayOwnerSid::BUSINESS} or {@link WlPayOwnerSid::USER}.
   *
   * @get get
   * @var int
   */
  public $id_pay_owner = 0;

  /**
   * Business key.
   * `null` if use system business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Currency key.
   *
   * @get get
   * @var string
   */
  public $k_currency = '0';

  /**
   * Payment owner.
   * Must be primary key of a business or a user.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';

  /**
   * Location key.
   * `null` to use system-wide merchant.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>