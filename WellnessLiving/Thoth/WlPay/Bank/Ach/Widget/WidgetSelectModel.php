<?php

namespace WellnessLiving\Thoth\WlPay\Bank\Ach\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsPayBankSid;
use WellnessLiving\Wl\WlPayMethodSid;
use WellnessLiving\Wl\WlPayOwnerSid;

/**
 * Point to get additional data for bank account select widget.
 *
 * @method WlModelRequest get() Gets a list of saved bank account.  Validates the input parameters, resolves the payment owner and business merchant, checks access, and returns the list of bank accounts available for selection in the bank account widget.
 */
class WidgetSelectModel extends WlModelAbstract
{
  /**
 * List of saved bank accounts, keyed by bank account key. Each entry: 
 *
 * <dl>
 *   <dt>string `k_pay_address`</dt>
 *   <dd>Address key of the bank account.</dd>
 * 
 *   <dt>string `k_pay_bank`</dt>
 *   <dd>Bank account key.</dd>
 * 
 *   <dt>string `k_region`</dt>
 *   <dd>Region key, or empty string if the address has no region.</dd>
 * 
 *   <dt>string `s_number`</dt>
 *   <dd>Part of the bank account number.</dd>
 * 
 *   <dt>string `s_name`</dt>
 *   <dd>Bank account nickname.</dd>
 * 
 *   <dt>bool `is_default`</dt>
 *   <dd>`true` if this is the default bank account, `false` otherwise.</dd>
 * 
 *   <dt>string `text_name_holder`</dt>
 *   <dd>Name of the account holder.</dd>
 * 
 *   <dt>string `text_city`</dt>
 *   <dd>City of the billing address.</dd>
 * 
 *   <dt>string `text_phone`</dt>
 *   <dd>Phone number of the billing address.</dd>
 * 
 *   <dt>string `text_postal`</dt>
 *   <dd>Postal code of the billing address.</dd>
 * 
 *   <dt>string `text_street1`</dt>
 *   <dd>First line of the billing street address.</dd>
 * 
 *   <dt>string `text_street2`</dt>
 *   <dd>Second line of the billing street address.</dd>
 * 
 *   <dt>string `text_region`</dt>
 *   <dd>Region title.</dd>
 * </dl>
 * @get result
 * @var array
 */
  public $a_pay_bank;

  /**
 * Pay bank id.
 *
 * @get get
 * @var int
 * @see RsPayBankSid
 */
  public $id_pay_bank;

  /**
 * Payment method.
 *
 * @get get
 * @var int
 * @see WlPayMethodSid
 */
  public $id_pay_method = 0;

  /**
 * Payment owner kind.
 *
 * @get get
 * @var int
 * @see WlPayOwnerSid
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