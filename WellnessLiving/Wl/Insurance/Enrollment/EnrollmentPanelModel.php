<?php

namespace WellnessLiving\Wl\Insurance\Enrollment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * "Wellness Programs" enrollment requirements API.
 *
 * @method WlModelRequest get() Gets "Wellness Program" info and a list of required fields for enrollment.  If we open the already purchased program, then the fields will be filled in with the entered data during enrollment.
 * @method WlModelRequest post() Validates list of fields that the user has filled in for enrollment.
 * @method WlModelRequest put() Validates and modifies the fields of the purchased program.
 */
class EnrollmentPanelModel extends WlModelAbstract
{
  /**
   * Reimbursement account information.
   *
   * Keys - field name.
   * Values - value entered by user.
   *
   * @post post
   * @put post
   * @var string[]
   */
  public $a_account = [];

  /**
   * List of fields that the user has filled in for enrollment.
   *
   * Keys refer specifically to field keys. 
   * Values refer specifically to values entered by the user.
   *
   * @post post
   * @put post
   * @var string[]
   */
  public $a_field = [];

  /**
   * "Wellness Program" info.
   *
   * <dl>
   *   <dt>bool `is_reimbursement_information_required`</dt>
   *   <dd>Determines whether the requiring ACH account.</dd>
   * 
   *   <dt>string `s_account`</dt>
   *   <dd>Part of reimbursement account number.</dd>
   * 
   *   <dt>string `text_insurance_organization`</dt>
   *   <dd>Insurance organization name.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_info;

  /**
   * List of fields that must be filled for enrollment. Presented by rendered template.
   *
   * @get result
   * @var string
   */
  public $html_field_list;

  /**
   * The key of the business in which the enrollment is performed.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Purchased program key.
   *
   * If set, the program key (<tt>k_wellness_program</tt>
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * "Wellness Program" key.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_wellness_program = '';
}

?>