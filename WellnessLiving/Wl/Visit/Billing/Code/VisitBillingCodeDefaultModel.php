<?php

namespace WellnessLiving\Wl\Visit\Billing\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Suggests billing codes for a visit: the default codes of its service and of its staff member, and the codes last
 * applied for its client.
 *
 * The visit is either an existing one, given by {@link VisitBillingCodeDefaultModel::$k_visit}, or one being booked:
 * then its service, staff member and client are given directly.
 *
 * @method WlModelRequest get() Returns the codes suggested for a visit.  The default codes of the service and of the staff member, and up to 5 codes last applied for the client, each list separately. The current staff member must be able to assign billing codes to appointments.
 */
class VisitBillingCodeDefaultModel extends WlModelAbstract
{
  /**
 * Codes last applied for the visits of the client, the most recently applied first.
 *
 * Only the codes the current staff member can apply again are returned: a custom code that is still in the billing
 * code list, a diagnostic code while the business has them turned on, and a temporary code only if the staff
 * member can add temporary codes.
 *
 * <dl>
 *   <dt>bool `is_custom`</dt>
 *   <dd>`true` for a custom code of the business or a temporary code, `false` for an ICD-10-CM diagnostic code.</dd>
 * 
 *   <dt>string `text_code`</dt>
 *   <dd>Code value, as it is printed on receipts and invoices.</dd>
 * 
 *   <dt>string|null `text_description`</dt>
 *   <dd>Description of the code. `null` for a temporary code.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_code_recent = [];

  /**
 * Codes applied by default to the service of the visit, sorted by the code value. Empty if the visit has no
 * service, for example if it is not an appointment.
 *
 * <dl>
 *   <dt>bool `is_custom`</dt>
 *   <dd>Always `true`: only custom codes can be default codes of a service.</dd>
 * 
 *   <dt>string `text_code`</dt>
 *   <dd>Code value, as it is printed on receipts and invoices.</dd>
 * 
 *   <dt>string `text_description`</dt>
 *   <dd>Description of the code.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_code_service = [];

  /**
 * Default code of the staff member of the visit: a list of one code, or an empty list if the staff member has no
 * default code.
 *
 * <dl>
 *   <dt>bool `is_custom`</dt>
 *   <dd>Always `true`: only a custom code can be the default code of a staff member.</dd>
 * 
 *   <dt>string `text_code`</dt>
 *   <dd>Code value, as it is printed on receipts and invoices.</dd>
 * 
 *   <dt>string `text_description`</dt>
 *   <dd>Description of the code.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_code_staff = [];

  /**
 * Business key.
 *
 * @get get
 * @var string
 */
  public $k_business = '';

  /**
 * Key of the service of the visit being booked. Required if {@link VisitBillingCodeDefaultModel::$k_visit} is not
 * given, and not used otherwise. The service must belong to the business.
 *
 * @get get
 * @var string
 */
  public $k_service = '';

  /**
 * Key of an existing visit. Its service, staff member and client are taken from the visit. Empty string for a visit
 * being booked: then they are given by {@link VisitBillingCodeDefaultModel::$k_service},
 * {@link VisitBillingCodeDefaultModel::$uid_staff} and {@link VisitBillingCodeDefaultModel::$uid_client}.
 *
 * @get get
 * @var string
 */
  public $k_visit = '';

  /**
 * Key of the client of the visit being booked. Used only if {@link VisitBillingCodeDefaultModel::$k_visit} is not
 * given. Empty string if the client is not known yet: then no most used codes are returned.
 *
 * @get get
 * @var string
 */
  public $uid_client = '';

  /**
 * Key of the staff member of the visit being booked. Required if {@link VisitBillingCodeDefaultModel::$k_visit} is
 * not given, and not used otherwise. The staff member must work in the business.
 *
 * @get get
 * @var string
 */
  public $uid_staff = '';
}

?>