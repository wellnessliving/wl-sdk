<?php

namespace WellnessLiving\Wl\Visit\Billing\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Applies billing codes to a visit, and returns them with the history of their changes.
 *
 * A visit gets custom codes of the business, ICD-10-CM diagnostic codes, and temporary codes typed in for this visit
 * only. The codes are stored against the visit, so its receipt and invoice keep showing what was applied even if a
 * code is changed or removed from the billing code list later. Every added and every removed code is logged.
 *
 * @method WlModelRequest get() Returns the billing codes applied to a visit and the history of their changes.  A staff member who can not assign billing codes gets the custom codes only, without the diagnostic codes and without the history. The answer carries the version of the codes, which must be posted back to change them, see {@link \Wl\Visit\Billing\Code\VisitBillingCodeAssignApi::$s_version}.
 * @method WlModelRequest post() Applies billing codes to a visit.  The given list replaces the codes of the visit as a whole. A code the visit has already keeps the type and the description it was applied with. A new code is looked up in the billing code list of the business first, then among the ICD-10-CM diagnostic codes if the business has turned them on. A code found nowhere is a temporary code for this visit only: it requires the access to create temporary codes, and it is not added to the billing code list. Every added and every removed code is logged with the reason and, if a signature is required, the signature.  The version of the codes the list is made from is posted together with the list: if another staff member has changed the codes in the meantime, the post is rejected with the error `code-version-outdated` instead of overwriting that change, see {@link \Wl\Visit\Billing\Code\VisitBillingCodeAssignApi::$s_version}.
 */
class VisitBillingCodeAssignModel extends WlModelAbstract
{
  /**
   * Billing codes applied to the visit, the diagnostic codes first, each type sorted by the code value.
   *
   * A staff member who can not assign billing codes gets the custom codes only: the diagnostic codes are a part of
   * the medical record of the client. The codes are changed by posting {@link VisitBillingCodeAssignModel::$a_text_code}.
   *
   * <dl>
   *   <dt>bool `is_custom`</dt>
   *   <dd>
   *     `true` for a custom code of the business or a temporary code for this visit only, `false` for an ICD-10-CM
   * diagnostic code.
   *   </dd>
   * 
   *   <dt>string `text_code`</dt>
   *   <dd>Code value, as it is printed on receipts and invoices.</dd>
   * 
   *   <dt>string|null `text_description`</dt>
   *   <dd>Description of the code as it was when the code was applied. `null` for a temporary code.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_code = [];

  /**
   * History of the changes of the billing codes of the visit, the latest change first: a record per added or removed
   * code, per "Codes applied by default" batch, per "Signed & locked billing codes" lock and per void of the codes
   * on a cancel or a no-show.
   *
   * Empty for a staff member who can not assign billing codes.
   *
   * <dl>
   *   <dt>string `dtu_change`</dt>
   *   <dd>Date and time of the change in UTC.</dd>
   * 
   *   <dt>string `text_log`</dt>
   *   <dd>What changed.</dd>
   * 
   *   <dt>string|null `text_reason`</dt>
   *   <dd>Reason of the change the staff member gave. `null` if no reason was given.</dd>
   * 
   *   <dt>string|null `text_signature`</dt>
   *   <dd>
   *     Signature of the staff member who made the change. `null` if no signature was given, or if the business did
   * not require one.
   *   </dd>
   * 
   *   <dt>string|null `uid_staff`</dt>
   *   <dd>
   *     Key of the staff member who made the change. `null` if the user is deleted, for the codes applied by
   * default, and for a void made not by a user.
   * 
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_history = [];

  /**
   * Values of all billing codes the visit must have, as they are printed on receipts and invoices.
   *
   * The list replaces the codes of the visit as a whole: a code that is not in the list is removed from the visit.
   * A value may be a code of the billing code list of the business, an ICD-10-CM diagnostic code if the business
   * has turned them on, or a temporary code for this visit only. A temporary code requires the access to create
   * temporary codes. The case of a value does not matter. The codes the visit has are returned in
   * {@link VisitBillingCodeAssignModel::$a_code}.
   *
   * @post post
   * @var string[]
   */
  public $a_text_code = [];

  /**
   * Voided billing codes of the visit.
   *
   * A visit gets voided codes when it is cancelled, late-cancelled or marked as a no-show: the codes are kept for
   * the record but become read-only. The slide-out of the appointment shows them in a separate read-only section.
   * A staff member who can not assign billing codes gets the voided custom codes only.
   * Empty while the visit has no voided codes, and empty while the visit is live: if a cancelled visit is restored,
   * its voided codes stay in the database but are not returned any more, the history has the record of the voiding.
   *
   * <dl>
   *   <dt>bool `is_custom`</dt>
   *   <dd>
   *     `true` for a custom code of the business or a temporary code for this visit only, `false` for an ICD-10-CM
   * diagnostic code.
   *   </dd>
   * 
   *   <dt>string `text_code`</dt>
   *   <dd>Code value, as it was printed on receipts and invoices.</dd>
   * 
   *   <dt>string|null `text_description`</dt>
   *   <dd>Description of the code as it was when the code was applied. `null` for a temporary code.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_void = [];

  /**
   * Date and time the diagnostic codes of the visit were locked, in UTC.
   * `null` when the diagnostic codes are not locked.
   *
   * @get result
   * @var string|null
   */
  public $dtu_lock = null;

  /**
   * `true` when the diagnostic codes of the visit are locked by a staff member who signed, `false` otherwise.
   *
   * A locked save that adds or removes any code requires a short reason, and a save that adds or removes a
   * diagnostic code requires a new signature, which re-locks the codes under the new signer.
   *
   * @get result
   * @var bool
   */
  public $is_locked = false;

  /**
   * `true` when a receipt for this visit has been generated at least once.
   *
   * While it is `true`, a save that adds or removes any code requires a short reason.
   *
   * @get result
   * @var bool
   */
  public $is_receipt_sent = false;

  /**
   * `true` if the business requires a signature when diagnostic codes of a visit are saved, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_signature = false;

  /**
   * `true` if the business has the diagnostic codes turned on, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_system = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Visit key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_visit = '';

  /**
   * Version of the billing codes of the visit: a value that changes every time the codes of the visit change.
   *
   * The version comes with the codes and must be posted back together with them. A post that carries an outdated
   * version is rejected with the error `code-version-outdated`, so that the codes another staff member has changed
   * in the meantime are not overwritten without being seen. The answer of a successful post carries the new version,
   * so the codes can be changed again without reading them anew.
   *
   * Empty string if the codes of the visit have never been changed.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $s_version = '';

  /**
   * Reason of the change, for example when the codes are changed after the receipt has been sent to the client.
   *
   * Empty string if no reason is given.
   *
   * @post post
   * @var string
   */
  public $text_reason = '';

  /**
   * Signature of the staff member who applies the codes: their full name, in any case.
   *
   * Required and stored only if the business requires a signature when billing codes are saved and the post adds or
   * removes a diagnostic code: a post that changes the custom codes only is saved without a signature. A signature
   * that is not the full name of the staff member is rejected with the error `signature-name-other`. Empty string if
   * no signature is given.
   *
   * @post post
   * @var string
   */
  public $text_signature = '';

  /**
   * Full name of the staff member who signed and locked the diagnostic codes of the visit, as it is at the moment
   * of the request.
   *
   * `null` when the diagnostic codes are not locked or when the user is deleted; the lock itself stays, so the
   * diagnostic codes are kept frozen.
   *
   * @get result
   * @var string|null
   */
  public $text_staff_name_lock = null;

  /**
   * Key of the staff member who signed and locked the diagnostic codes of the visit.
   *
   * `null` when the diagnostic codes are not locked or when the user is deleted.
   *
   * @get result
   * @var string|null
   */
  public $uid_staff_lock = null;
}

?>