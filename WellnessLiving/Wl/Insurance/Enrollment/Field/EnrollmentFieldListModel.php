<?php

namespace WellnessLiving\Wl\Insurance\Enrollment\Field;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves and validates a list of insurance partner fields.
 *
 * Use the GET method to load a list of required fields.
 *
 * Use the POST method to validate the fields before sending them to the payment API.
 */
class EnrollmentFieldListModel extends WlModelAbstract
{
  /**
   * Reimbursement account information.
   *
   * Keys - field name.
   * Values - value entered by user.
   *
   * 
   * @post post
   * @put post
   * @var string[]
   */
  public $a_account = [];

  /**
   * List of fields that the user has filled in for enrollment.
   *
   * Keys refer specifically to field keys.  Values refer specifically to values entered by the user.
   *
   * 
   * @post post
   * @put post
   * @var string[]
   */
  public $a_field = [];

  /**
   * The partner field list: 
   *
   * <dl>
   *   <dt>array[] `a_account`</dt>
   *   <dd>
   *     The list of reimbursement account fields.
   * If the program doesn't require reimbursement, this list will be empty.
   * Each element has the same structure as elements of `a_field`:
   * <dl>
   *   <dt>string[] `a_config`</dt>
   *   <dd>
   *     Additional configuration for the field.
   *
   *     Empty array for other fields.
   *   </dd>
   * 
   *   <dt>int|null `i_length`</dt>
   *   <dd>Maximum length of the field value. `null` if no limit.</dd>
   * 
   *   <dt>bool `is_disable`</dt>
   *   <dd>`true` if the field is disabled and should not be shown.</dd>
   * 
   *   <dt>bool `is_required`</dt>
   *   <dd>`true` if the field is required.</dd>
   * 
   *   <dt>string `k_field`</dt>
   *   <dd>The field identifier key.</dd>
   * 
   *   <dt>string `s_regular`</dt>
   *   <dd>Regular expression for client-side validation. Empty string if no validation pattern.</dd>
   * 
   *   <dt>string `text_display_name`</dt>
   *   <dd>The label text for the field displayed to the user.</dd>
   * 
   *   <dt>string `text_error_message`</dt>
   *   <dd>The error message to display if the field value is invalid.</dd>
   * 
   *   <dt>string `text_field_name`</dt>
   *   <dd>The internal name of the field.</dd>
   * </dl>
   *     <dl>
   *       <dt>string[] `a_config`</dt>
   *       <dd>
   *         Additional configuration for the field.
   *
   * Empty array for other fields.
   *       </dd>
   * 
   *       <dt>int|null `i_length`</dt>
   *       <dd>Maximum length of the field value. `null` if no limit.</dd>
   * 
   *       <dt>bool `is_disable`</dt>
   *       <dd>`true` if the field is disabled and should not be shown.</dd>
   * 
   *       <dt>bool `is_required`</dt>
   *       <dd>`true` if the field is required.</dd>
   * 
   *       <dt>string `k_field`</dt>
   *       <dd>The field identifier key.</dd>
   * 
   *       <dt>string `s_regular`</dt>
   *       <dd>Regular expression for client-side validation. Empty string if no validation pattern.</dd>
   * 
   *       <dt>string `text_display_name`</dt>
   *       <dd>The label text for the field displayed to the user.</dd>
   * 
   *       <dt>string `text_error_message`</dt>
   *       <dd>The error message to display if the field value is invalid.</dd>
   * 
   *       <dt>string `text_field_name`</dt>
   *       <dd>The internal name of the field.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_field`</dt>
   *   <dd>
   *     The list of partner enrollment fields. Each element:
   * <dl>
   *   <dt>string[] `a_config`</dt>
   *   <dd>
   *     Additional configuration for the field:
   *     <dl>
   *       <dt>string[] `a_option`</dt>
   *       <dd>
   *         Options for dropdown fields. Keys are display titles, values are option values.
   *         Empty array if the field is not a dropdown.
   *       </dd>
   * 
   *       <dt>string `text_type`</dt>
   *       <dd>The type of text input. Present only for text-type fields.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int|null `i_length`</dt>
   *   <dd>Maximum length of the field value. `null` if no limit.</dd>
   * 
   *   <dt>bool `is_disable`</dt>
   *   <dd>`true` if the field is disabled and should not be shown.</dd>
   * 
   *   <dt>bool `is_required`</dt>
   *   <dd>`true` if the field is required.</dd>
   * 
   *   <dt>string `k_field`</dt>
   *   <dd>The field key. 
   * 
   *   <dt>string `s_regular`</dt>
   *   <dd>Regular expression for client-side validation. Empty string if no validation pattern.</dd>
   * 
   *   <dt>string `text_display_name`</dt>
   *   <dd>The label text for the field displayed to the user.</dd>
   * 
   *   <dt>string `text_error_message`</dt>
   *   <dd>The error message to display if the field value is invalid.</dd>
   * 
   *   <dt>string `text_field_name`</dt>
   *   <dd>The internal name of the field.</dd>
   * </dl>
   *     <dl>
   *       <dt>string[] `a_config`</dt>
   *       <dd>
   *         Additional configuration for the field:
   * <dl>
   *   <dt>string[] `a_option`</dt>
   *   <dd>
   *     Options for dropdown fields. Keys are display titles, values are option values.
   *     Empty array if the field is not a dropdown.
   *   </dd>
   * 
   *   <dt>string `text_type`</dt>
   *   <dd>The type of text input. Present only for text-type fields.</dd>
   * </dl>
   *         <dl>
   *           <dt>string[] `a_option`</dt>
   *           <dd>
   *             Options for dropdown fields. Keys are display titles, values are option values.
   * Empty array if the field is not a dropdown.
   *           </dd>
   * 
   *           <dt>string `text_type`</dt>
   *           <dd>The type of text input. Present only for text-type fields.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int|null `i_length`</dt>
   *       <dd>Maximum length of the field value. `null` if no limit.</dd>
   * 
   *       <dt>bool `is_disable`</dt>
   *       <dd>`true` if the field is disabled and should not be shown.</dd>
   * 
   *       <dt>bool `is_required`</dt>
   *       <dd>`true` if the field is required.</dd>
   * 
   *       <dt>string `k_field`</dt>
   *       <dd>The field key. 
   * 
   *       <dt>string `s_regular`</dt>
   *       <dd>Regular expression for client-side validation. Empty string if no validation pattern.</dd>
   * 
   *       <dt>string `text_display_name`</dt>
   *       <dd>The label text for the field displayed to the user.</dd>
   * 
   *       <dt>string `text_error_message`</dt>
   *       <dd>The error message to display if the field value is invalid.</dd>
   * 
   *       <dt>string `text_field_name`</dt>
   *       <dd>The internal name of the field.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_field_list;

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