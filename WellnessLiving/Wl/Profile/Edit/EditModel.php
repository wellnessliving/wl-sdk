<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\Wl\Field\WlFieldGeneralSid;
use WellnessLiving\Wl\Field\WlFieldTypeSid;
use WellnessLiving\WlModelAbstract;

/**
 * This endpoint gets information about a client profile. Alternatively, this endpoint can also edit or create a profile.
 *
 * The GET method returns the profile fields for a specified user or a blank set of fields for a new user of a
 * given business:
 *
 * * If the GET method is used with a valid UID greater than 0, the method will return a list of fields with the
 *   values of the specified user.
 * * If the GET method is used with a UID set to 0, a list of profile fields will be returned for the specified
 *   business. A user in WellnessLiving can be in multiple businesses. There are some fields common among all business
 *   and others specific to one business.
 *
 * The type of field is described in `id_field_type`, which will be one of the {@link WlFieldTypeSid} constants.
 * Some fields have a general type which can have a specific format:
 * * Address - An array containing the following keys: `k_city`, `s_address`, `s_city`, and `s_postal`.
 * The `k_city` value can be retrieved via the {@link \WellnessLiving\Core\Geo\ComboboxModel} endpoint. The following is an example address array:
 *
 *   <pre>
 *     $o_edit_model->a_change[13] = [
 *       'k_city' => '4934', // Toronto's k_city value.
 *       's_address' => 'Canada',
 *       's_city' => 'Toronto, ON, Canada',
 *       's_postal' => 'M5X1E5'
 *     ];
 *   </pre>
 *
 * * Birthday -  A string containing the date in MySQL format (for example, `1987-06-05`).
 * * Email Address - An array containing the following keys:
 * <dl>
 *   <dt>bool <var>is_inherit</var></dt>
 *   <dd>Whether the user shares the email address with another user.
 *   This is typically done for children who use their parent’s email (is_inherit=1).
 *   In general, most other cases use (is_inherit=0).</dd>
 *   <dt>bool <var>s_mail</var></dt>
 *   <dd>The new email address.</dd>
 * </dl>
 */
class EditModel extends WlModelAbstract
{
  /**
   * A list of fields to change. Values are the new field values. Specific values depend on an individual field type.
   * Some fields may be strings while others are arrays. If a composite field is changed, all fields should be specified
   * (for example, if you change your address, you'll need to specify the city). Keys are the `k_field` values.
   *
   * @put post
   * @var array
   */
  public $a_change = [];

  /**
   * A copy of the {@link \WellnessLiving\Wl\Profile\Edit\EditModel::a_change}.
   * This is used for POST requests when creating a new user.
   *
   * @post post
   * @var array
   */
  public $a_new = [];

  /**
   * Field values that have already been saved. After loading, these values are retrieved from `a_structure`.
   * After saving, these values are updated from `a_change`.
   * The structure of `a_old` corresponds to the structure of `a_change`.
   *
   * After loading, these values are retrieved from {@link \WellnessLiving\Wl\Profile\Edit\EditModel::a_structure} with
   * {@link \WellnessLiving\Wl\Profile\Field\FieldElementView::configValue()}.
   *
   * After saving, these values are updated from {@link \WellnessLiving\Wl\Profile\Edit\EditModel::a_change}.
   *
   * The structure of this array corresponds to structure of {@link \WellnessLiving\Wl\Profile\Edit\EditModel::a_change}.
   *
   * @var array
   */
  public $a_old = [];

  /**
   * The values and structure of all fields. Array keys are field IDs (`k_field`).
   * Array values are the field values. The array has the following structure:
   * <ul>
   *   <li>int [<var>id_field_general</var>] The ID of a system field. One of {@link WlFieldGeneralSid} constants.
   *     This value is only defined if <var>id_field_type</var>={@link WlFieldTypeSid::GENERAL}.</li>
   *   <li>bool <var>is_require</var> Indicates whether the value of this field is required. This will be `1`
   *     if required or `0` if the field is optional.</dd>
   *   <li>int <var>id_field_type</var> The type of field. This is one of the {@link WlFieldTypeSid} constants.</li>
   *   <li>string <var>k_field</var>The field ID (<var>k_field</var>). A copy of the key of this array element.</li>
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
   * The key of the business where you're editing.
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
   * The password to be set for a new user.
   *
   * @post post
   * @var string
   */
  public $text_password = '';

  /**
   * The key of the user to edit.
   *
   * If empty, then an empty form will be displayed to add a new user.
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