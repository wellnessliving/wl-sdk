<?php

namespace WellnessLiving\Wl\Insurance\Enrollment\Field;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves and validates a list of insurance partner fields.
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
   * @post post
   * @put post
   * @var array
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
   * @var array
   */
  public $a_field = [];

  /**
   * The partner field list.
   * <dl>
   *  <dt>array <var>a_account</var></dt>
   *  <dd>
   *    The list of reimbursement account fields.
   *    If the program doesn't require reimbursement, this list will be empty.
   *    The description of the list of fields is similar to the <var>a_field</var>.
   *  </dd>
   *  <dt>array <var>a_field</var></dt>
   *  <dd>
   *    The partner field info.
   *    <dl>
   *      <dt>array <var>a_config</var></dt>
   *      <dd>
   *        Additional information about the field.
   *        <dl>
   *          <dt>array <var>a_option</var></dt>
   *          <dd>A set of options for the dropdown list. The key is the title and the value is the value of the list item.</dd>
   *          <dt>string <var>text_type</var></dt>
   *          <dd>The type of text field.</dd>
   *        </dl>
   *      </dd>
   *
   *      <dt>int <var>i_length</var></dt>
   *      <dd>The length of the field.</dd>
   *
   *      <dt>bool <var>is_disable</var></dt>
   *      <dd>Determines whether this field is enabled.</dd>
   *
   *      <dt>bool <var>is_required</var></dt>
   *      <dd>Determines whether this field is required.</dd>
   *
   *      <dt>string <var>k_field</var></dt>
   *      <dd>The field key.</dd>
   *
   *      <dt>string <var>s_regular</var></dt>
   *      <dd>The regular expression validation for the field.</dd>
   *
   *      <dt>string <var>text_display_name</var></dt>
   *      <dd>The label text for the field.</dd>
   *
   *      <dt>string <var>text_error_message</var></dt>
   *      <dd>The error message if the value in field isn't valid.</dd>
   *
   *      <dt>string <var>text_field_name</var></dt>
   *      <dd>The name of the field.</dd>
   *    </dl>
   *  </dd>
   * </dl>
   *
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