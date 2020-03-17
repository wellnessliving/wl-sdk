<?php

namespace WellnessLiving\Wl\Insurance\Enrollment\Field;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of partner field for model.
 *
 * Use the GET method to load list of fields.
 *
 * Use the POST method to validate the fields before sending to payment API.
 */
class EnrollmentFieldListModel extends WlModelAbstract
{
  /**
   * Reimbursement account information.
   *
   * Keys - field key.
   * Values - value entered by user.
   *
   * Validation is performed via POST method.
   *
   * @post post
   * @var array
   */
  public $a_account;

  /**
   * List of fields that the user has filled in for enrollment.
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
   * Partner field list.
   * <dl>
   *  <dt>array <var>a_account</var></dt>
   *  <dd>
   *    List of reimbursement account fields.
   *    If the program does not require reimbursement, this list will be empty.
   *    The description of the list of fields is similar to the <var>a_field</var>.
   *  </dd>
   *  <dt>array <var>a_field</var></dt>
   *  <dd>
   *    Partner field info.
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
   *      <dd>Length of field.</dd>
   *
   *      <dt>bool <var>is_disable</var></dt>
   *      <dd>Whether this field is enabled.</dd>
   *
   *      <dt>bool <var>is_required</var></dt>
   *      <dd>Whether this field is required.</dd>
   *
   *      <dt>string <var>k_field</var></dt>
   *      <dd>Field key.</dd>
   *
   *      <dt>string <var>s_regular</var></dt>
   *      <dd>Regular expression validation for field.</dd>
   *
   *      <dt>string <var>text_display_name</var></dt>
   *      <dd>Label text for field.</dd>
   *
   *      <dt>string <var>text_error_message</var></dt>
   *      <dd>Error message if value in field is not valid.</dd>
   *
   *      <dt>string <var>text_field_name</var></dt>
   *      <dd>Name of field.</dd>
   *    </dl>
   *  </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_field_list;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Wellness Program key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_wellness_program;
}

?>