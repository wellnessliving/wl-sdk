<?php

namespace WellnessLiving\Wl\Billing\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Adds, reads, edits and removes a single custom billing code of a business.
 *
 * Every method of this model works with the custom codes of the business only - the codes the business owns and
 * maintains itself in its central billing code list. A custom code is freely editable by staff with
 * the configuration permission.
 * System (diagnostic) codes are not reachable through this model.
 *
 * The central list itself is read by {@link BillingCodeListModel}.
 *
 * Removing a code does not delete it: the code stays intact on every appointment, receipt and invoice it has already
 * been applied to, it is only not offered for selection anymore.
 *
 * @method WlModelRequest delete() Removes a custom billing code from the central list of the business.  The code is not deleted - it stays on every receipt and invoice it has already been used on, and it keeps its value occupied. Adding the same value again brings this very code back, see {@link \Wl\Billing\Code\BillingCodeApi::put()}. Removing a code that is removed already does nothing.
 * @method WlModelRequest get() Returns a single custom billing code of the business.  A removed code is returned as well, with {@link \Wl\Billing\Code\BillingCodeApi::$is_remove} set - it is still shown on the receipts it has been applied to.
 * @method WlModelRequest post() Edits the value and the description of a custom billing code of the business.  The new value applies going forward only - every receipt and invoice that has already been generated with the old value keeps it.
 * @method WlModelRequest put() Adds a custom billing code to the central list of the business.  If the business has removed a code with this value before, that code is brought back with the new description instead of a second code with the same value being created, and {@link \Wl\Billing\Code\BillingCodeApi::$k_code} returns the key of that very code.
 */
class BillingCodeModel extends WlModelAbstract
{
  /**
 * Whether the code is removed from the central list of the business.
 *
 * `true` for a code that is not offered for selection anymore, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_remove = false;

  /**
 * Business key.
 *
 * @delete get
 * @get get
 * @post get
 * @put get
 * @var string
 */
  public $k_business = '';

  /**
 * Key of the custom billing code.
 *
 * @delete get
 * @get get
 * @post get
 * @put result
 * @var string
 */
  public $k_code = '';

  /**
 * Code value, as it is printed on receipts and invoices.
 *
 * @decorator trim
 * @get result
 * @post post
 * @put post
 * @var string
 */
  public $text_code = '';

  /**
 * Description of the code.
 *
 * @decorator trim
 * @get result
 * @post post
 * @put post
 * @var string
 */
  public $text_description = '';
}

?>