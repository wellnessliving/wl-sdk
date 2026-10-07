<?php

namespace WellnessLiving\Wl\Billing\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves the billing code list of a business.
 *
 * The list is the single place a client asks for codes: it contains both the custom codes of the business and the
 * system (diagnostic) codes of the read-only ICD-10-CM reference library, and a row tells the two types apart.
 *
 * A single custom code is added, read, edited and removed by {@link BillingCodeModel}.
 *
 * @method WlModelRequest get() Gets the billing code list of the business.  The list contains the custom codes of the business and the diagnostic codes of the read-only ICD-10-CM reference library, the descriptions of the latter in the language of the request. The diagnostic codes are returned only if the business has turned on ICD diagnostic codes.
 */
class BillingCodeListModel extends WlModelAbstract
{
  /**
 * Billing codes of the business.
 *
 * Contains the custom codes of the business and the system codes of the ICD-10-CM reference library, which are
 * shared by all businesses. The system codes are returned only if the business has turned on ICD diagnostic
 * codes .
 *
 * Removed codes are not returned - they are not offered for selection anymore, they only stay on the receipts
 * and invoices they have already been applied to.
 *
 * The list is not sorted - sorting and filtering of the list is a matter of the page that shows it.
 *
 * <dl>
 *   <dt>string[] `a_service`</dt>
 *   <dd>
 *     List of services the code is applied to by default. Always empty for a system code: system codes are not
 * applied to services by default. 
 *   </dd>
 * 
 *   <dt>bool `is_custom`</dt>
 *   <dd>`true` for a custom code of the business, `false` for a system code of the ICD-10-CM reference library.</dd>
 * 
 *   <dt>string `k_code`</dt>
 *   <dd>
 *     Key of the code. Keys of the custom and of the system codes never clash.
 * 
 *   </dd>
 * 
 *   <dt>string `text_code`</dt>
 *   <dd>Code value, as it is printed on receipts and invoices.</dd>
 * 
 *   <dt>string `text_description`</dt>
 *   <dd>
 *     Description of the code. The business typed it in for a custom code. For a system code it comes from the
 * reference library, in the language of the request.
 *   </dd>
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

  /**
 * Service key. If set, only the codes that are applied to this service by default are returned. System codes are
 * not applied to services by default, so they are not returned then.
 *
 * @get get
 * @var string
 */
  public $k_service = '';
}

?>