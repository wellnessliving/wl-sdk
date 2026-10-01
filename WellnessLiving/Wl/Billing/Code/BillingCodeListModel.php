<?php

namespace WellnessLiving\Wl\Billing\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves the billing code list of a business.
 *
 * For now the list contains the custom codes of the business only, so it is not named after a code type: it is
 * meant to become the single place a client asks for codes, and the system (diagnostic) codes of the read-only
 * ICD-10-CM reference library are to be returned from here as well.
 *
 * A single custom code is added, read, edited and removed by {@link BillingCodeModel}.
 *
 * @method WlModelRequest get() Gets the billing code list of the business.  The list contains the custom codes of the business for now, and is meant to become the single place a client asks for codes, with the diagnostic codes of the read-only ICD-10-CM reference library to be returned from here as well.
 */
class BillingCodeListModel extends WlModelAbstract
{
  /**
 * Billing codes of the business.
 *
 * Contains the custom codes of the business for now. The system codes of the ICD-10-CM reference library are to
 * be returned here too, and a row is then to tell the two types apart.
 *
 * Removed codes are not returned - they are not offered for selection anymore, they only stay on the receipts
 * and invoices they have already been applied to.
 *
 * The list is not sorted - sorting and filtering of the list is a matter of the page that shows it.
 *
 * <dl>
 *   <dt>string `k_code`</dt>
 *   <dd>Key of the code. </dd>
 * 
 *   <dt>string `text_code`</dt>
 *   <dd>Code value, as it is printed on receipts and invoices.</dd>
 * 
 *   <dt>string `text_description`</dt>
 *   <dd>Description of the code the business typed in.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_code = [];

  /**
 * Business key.
 *
 * @get get
 * @var string
 */
  public $k_business = '';
}

?>