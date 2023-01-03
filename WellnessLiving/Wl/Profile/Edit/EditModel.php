<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Gets information about a client profile. Alternatively edits or creates a profile.
 *
 * The GET method returns the profile fields for a specified user or a blank set of fields for a new user of the
 * given business:
 *
 * * If the GET method is used with a valid uid greater than 0, the method will return a list of fields with the
 *   values of the specified user.
 * * If the GET method is used with the uid set to 0, a list of profile fields will be returned for the specified
 *   business. A user in WellnessLiving can be in multiple businesses, there are some fields common among all business
 *   and others specific to one business.
 *
 * The type of field is described in id_field_type, which will be one of the WlFieldTypeSid constants.
 * Some fields have a general type which can have a specific format:
 * * Address - An array containing the following keys: k_city, s_address, s_city, and s_postal.
 * The k_city value can be retrieved via the Core\Geo\ComboboxModel endpoint. The following is an example address array:
 *
 * <pre>
 * $o_edit_model->a_change[13] = [
 *   'k_city' => '4934', // Toronto's k_city value.
 *   's_address' => 'Canada',
 *   's_city' => 'Toronto, ON, Canada',
 *   's_postal' => 'M5X1E5'
 *];
 * </pre>
 *
 * * Birthday -  A string containing the date in MySQL format (eg ‘1987-06-05’).
 * * Email Address - An array containing the following keys: is_inherit and s_mail. The is_inherit value is whether the
 * user shares the email address with another user. Typically this is done for children, they will use their parent’s
 * email (is_inherit=1). In the general case and most others use is_inherit=0. The s_mail value is simply the new
 * email address.
 */
class EditModel extends WlModelAbstract
{
  /**
   * A list of fields to change. Values are the new field values. Specific values depend on an individual field type.
   * Some fields may be strings, others are arrays. If a composite field is changed, all fields should be specified
   * (e.g., if you change your address you will need to specify the city). Keys are the k_field values.
   *
   * @put post
   * @var array
   */
  public $a_change = [];

  /**
   * Copy of the {@link Wl_Profile_Edit_EditModel.a_change}.
   * Used for POST request when creating a new user.
   *
   * @post post
   * @var array
   */
  public $a_new = [];

  /**
   * Field values that have already been saved. After load, these values are retrieved from a_structure.
   * After a save, these values are updated from a_change.
   * The structure of a_old corresponds to the structure of a_change.
   *
   * After load these values are retrieved from {@link Wl_Profile_Edit_EditModel.a_structure} with
   * {@link Wl_Profile_Field_FieldElementView.configValue()}.
   *
   * After save these values are updated from {@link Wl_Profile_Edit_EditModel.a_change}.
   *
   * Structure of this array corresponds to structure of {@link Wl_Profile_Edit_EditModel.a_change}.
   *
   * @var array
   */
  public $a_old = [];

  /**
   * Values and structure of all fields. Array keys are field IDs (k_field).
   * Array values are the field values. The array has the following structure:
   * <ul>
   *   <li>int [<var>id_field_general</var>] The ID of a system field. One of {@link RsFieldGeneralSid} constants.
   *
   *     This value is only defined if <var>id_field_type</var>={@link RsFieldTypeSid.GENERAL}.</li>
   *   <li>bool <var>is_require</var> Indicates whether the value of this field is required. `1`
   *     if required, `0` if field is optional.</dd>
   *   <li>int <var>id_field_type</var> The type of field. This is one of the {@link RsFieldTypeSid} constants.</li>
   *   <li>string <var>k_field</var>The Field ID (<var>k_field</var>). A copy of key of this array element.</li>
   *   <li>string <var>s_title</var> The title of the field.</li>
   *   <li>mixed <var>x_value</var> The value of the field. This value is defined by individual fields.</li>
   * </ul>
   *
   * @get result
   * @var array
   */
  public $a_structure = [];

  /**
   * Indicates whether to display the full profile edit form or the short version.
   * This is assumed to be used only in user registration mode.
   *
   * @get result
   * @post get
   * @var bool
   */
  public $is_short = 0;

  /**
   * Indicates whether to display the form as a user or as a staff member.
   * Staff members may have access to different fields than the user.
   *
   * @get get
   * @post get
   * @put get
   * @var bool
   */
  public $is_staff = 0;

  /**
   * The key of the business to manipulate.
   *
   * An empty value will return the system-wide fields.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Password to be set for a new user.
   *
   * @post post
   * @var string
   */
  public $text_password = '';

  /**
   * The key of the user to manipulate.
   *
   * If empty then an empty form will be displayed to add a new user.
   *
   * @get get
   * @post get
   * @post result
   * @put get
   * @var string
   */
  public $uid = '';
}

?>