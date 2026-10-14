<?php

namespace WellnessLiving\Wl\Pay\Form\Surcharge;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Preview of the SAL-1314 surcharge-suppression rule: whether a surcharge would be allowed for a card identified
 * by its BIN (a newly-typed number) or by a saved card key, before the card is actually charged.
 *
 * Not the enforcement point - the server decides again, independently, at the moment of the charge (steps 6-8 of
 * `Thoth/PayProcessor/DirectConnect/doc/SAL-1314-suppress-surcharge-debit-paragon.md`). This API only lets the
 * browser show the correct total and lock the staff surcharge switch before that happens.
 *
 * @method WlModelRequest get() Previews whether a surcharge is allowed for a card.  Called while the client is typing a card number, or has selected a saved card, so the browser can show the correct total and lock the surcharge switch before the card is actually charged (SAL-1314 step 10).
 */
class SurchargeTenderModel extends WlModelAbstract
{
  /**
 * Payment method the card would be charged with.
 *
 * Must be {@link WlPayMethodSid::ECOMMERCE} or {@link WlPayMethodSid::POS}.
 *
 * @get get
 * @var int
 */
  public $id_pay_method = 0;

  /**
 * Whether a surcharge is allowed for the card identified by {@link SurchargeTenderModel::$s_bin} or
 * {@link SurchargeTenderModel::$k_pay_bank}.
 *
 * `true` whenever the business's processor is not subject to the rule, or the rule does not apply to this
 * country/pay method - exactly the same meaning as "do not suppress", never a stand-in for "lookup failed".
 *
 * @get result
 * @var bool
 */
  public $is_allowed = true;

  /**
 * Business key.
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
 * Location key.
 *
 * `null`/`'0'` to use the system-wide merchant.
 *
 * @get get
 * @var string
 */
  public $k_location = '0';

  /**
 * Key of a saved card to preview.
 *
 * Exactly one of {@link SurchargeTenderModel::$k_pay_bank} and {@link SurchargeTenderModel::$s_bin} must be set.
 *
 * @get get
 * @var string|null
 */
  public $k_pay_bank = null;

  /**
 * First digits of a newly-typed card number (at least 6).
 *
 * Exactly one of {@link SurchargeTenderModel::$k_pay_bank} and {@link SurchargeTenderModel::$s_bin} must be set.
 *
 * @get get
 * @var string|null
 */
  public $s_bin = null;
}

?>