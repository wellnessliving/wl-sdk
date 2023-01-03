<?php

namespace WellnessLiving\Wl\Insurance\Enrollment\Field;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of insurance partner fields and then validates them
 *
 * Use the GET method to load a list of required fields.
 *
 * Use the POST method to validate the fields before sending them to the payment API.
 */
class EnrollmentFieldListModel extends WlModelAbstract
{
  /**
   * A list of reimbursement account fields. If the program does not require reimbursement,
   * this list will be empty. The description of the list of fields is the same as <var>$a_field</var>.
   *
   * Validation is performed via POST method.
   *
   * @post post
   * @var array
   */
  public $a_account;

  /**
   * The list of fields that the user has filled in for enrollment.
   * The array keys will be the field key. The array values are the values entered by the user.
   *
   * Keys - field key.
   * Values - value entered by user.
   *
   * Validation is performed via POST method.
   *
   * @post post
   * @var array
   */
  public $a_field;

  /**
   * The partner field list.
   * <dl>
   *  <dt>array <var>a_account</var></dt>
   *  <dd>
   *    The list of reimbursement account fields.
   *    If the program does not require reimbursement, this list will be empty.
   *    The description of the list of fields is similar to the <var>a_field</var>.
   *  </dd>
   *  <dt>array <var>a_field</var></dt>
   *  <dd>
   *    The partner field info.
   *    <dl>
   *      <dt>array <var>a_config</var></dt>
   *      <dd>
   *        Additional information about field.
   *        <dl>
   *          <dt>array <var>a_option</var></dt>
   *          <dd>Set of options for the dropdown list. The key is the title, the value is the value of the list item.</dd>
   *          <dt>string <var>text_type</var></dt>
   *          <dd>Type of text field.</dd>
   *        </dl>
   *      </dd>
   *
   *      <dt>int <var>i_length</var></dt>
   *      <dd>The length of field.</dd>
   *
   *      <dt>bool <var>is_disable</var></dt>
   *      <dd>Whether this field is enabled.</dd>
   *
   *      <dt>bool <var>is_required</var></dt>
   *      <dd>Whether this field is required.</dd>
   *
   *      <dt>string <var>k_field</var></dt>
   *      <dd>The field key.</dd>
   *
   *      <dt>string <var>s_regular</var></dt>
   *      <dd>The regular expression validation for field.</dd>
   *
   *      <dt>string <var>text_display_name</var></dt>
   *      <dd>The label text for field.</dd>
   *
   *      <dt>string <var>text_error_message</var></dt>
   *      <dd>The error message if value in field is not valid.</dd>
   *
   *      <dt>string <var>text_field_name</var></dt>
   *      <dd>The name of field.</dd>
   *    </dl>
   *  </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_field_list;

  /**
   * The business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * The Wellness Program insurer key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_wellness_program;
}

?>