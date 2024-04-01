<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\Core\Geo\ComboboxModel;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Field\WlFieldGeneralSid;
use WellnessLiving\Wl\Field\WlFieldTypeSid;
use WellnessLiving\Wl\Profile\RegisterSourceSid;

/**
 * Gets information about a client profile. This endpoint can also edit or create a profile.
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
 * Some fields have a general type, which can have a specific format:
 * * Address - An array containing the following keys: `k_city`, `s_address`, `s_city`, and `s_postal`.
 * The `k_city` value can be retrieved via the {@link ComboboxModel} endpoint. The following is an example address array:
 *
 * * Birthday - A string containing the date in MySQL format (for example, `1987-06-05`).
 * * Email Address - An array containing the following keys:
 * <dl>
 *   <dt>bool <var>is_inherit</var></dt>
 *   <dd>Determines whether the user shares the email address with another user.
 *   This is typically done for children who use their parent’s email (`is_inherit=1`).
 *   In general, most other cases use (`is_inherit=0`).</dd>
 *   <dt>bool <var>s_mail</var></dt>
 *   <dd>The new email address.</dd>
 *   <dt>int <var>uid_mail</var></dt>
 *   <dd>User key of another user when adding an email inheritance.</dd>
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
   * List of errors.
   * `null` if there was no mistake.
   *
   * @get result
   * @post result
   * @var array|null
   */
  public $a_error_list;

  /**
   * Information for user's photo.
   * It is necessary to save simultaneously user and photo in staff member mode.
   *
   * Attention!
   * Data from this field is taken directly from a POST somewhere in the depths of the photo upload.
   *
   * @post post
   * @var array
   */
  public $a_image_upload = [];

  /**
   * A copy of the {@link EditModel::$a_change}.
   * This is used for POST requests when creating a new user.
   *
   * @post post
   * @var array
   */
  public $a_new = [];

  /**
   * An array contained with information about phone inheritance.
   * The array has the following structure:
   * <dl>
   *   <dt>bool [<var>is_phone_inherit</var>]</dt>
   *   <dd>Indicates weather to inherit phone numbers from relative or not. `1` if phone inheritance is needed, '0' otherwise.</dd>
   *   <dt>string <var>uid_relative</var></dt>
   *   <dd>User key of relative.</dd>
   * </dl>
   *
   * @get result
   * @post post
   * @put post
   * @var array[]
   */
  public $a_phone_inherit = [];

  /**
   * The values and structure of all fields. Array keys are field IDs (`k_field`).
   * Array values are the field values. The array has the following structure:
   * <dl>
   *   <dt>int [<var>id_field_general</var>]</dt>
   *   <dd>
   *     The ID of a system field. One of the {@link WlFieldGeneralSid} constants.
   *     This value is only defined if <var>id_field_type</var>={@link WlFieldTypeSid::GENERAL}.
   *   </dd>
   *   <dt>bool <var>is_require</var></dt>
   *   <dd>Indicates whether the value of this field is required. This will be `1` if required or `0` if the field is optional.</dd>
   *   <dt>int <var>id_field_type</var></dt>
   *   <dd>The type of field. One of the {@link WlFieldTypeSid} constants.</dd>
   *   <dt>string <var>k_field</var></dt>
   *   <dd>The field ID (<var>k_field</var>). A copy of the key of this array element.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The title of the field.</dd>
   *   <dt>mixed <var>x_value</var></dt>
   *   <dd>The value of the field. This value is defined by individual fields.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_structure;

  /**
   * Registration source ID.
   * One of {@link RegisterSourceSid} constants.
   *
   * Used only to register new clients.
   * * If the client is already authorized, the field value will not be used.
   * * If the client is not authorized and no value is set, {@link RegisterSourceSid::SELF} will be used.
   *
   * @get get
   * @post get
   * @put get
   * @var int|null
   */
  public $id_register_source = null;

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
   * This will be `true` to sign in a created user. Otherwise, this will be `false`.
   *
   * @post post
   * @var bool
   */
  public $is_sing_in = false;

  /**
   * Indicates whether to display the form as a user or as a staff member.
   * Staff members may have access to different fields than the user.
   *
   * @get get
   * @post get
   * @put get
   * @var bool
   */
  public $is_staff = false;

  /**
   * The key of the business you're editing.
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
   * Exception class name.
   * `null` if there was no mistake.
   *
   * @field class
   * @get result
   * @post result
   * @var string|null
   */
  public $s_class;

  /**
   * Code of the error.
   * `null` if there was no mistake.
   *
   * @field code
   * @get result
   * @post result
   * @var string|null
   */
  public $s_code;

  /**
   * Status of the request.
   * `null` if there was no mistake.
   *
   * @field status
   * @post result
   * @var string|null
   */
  public $s_status;

  /**
   * Compound key delimited wit a colon. First part is business key, where selected client exists.
   * Second part - uid of already existed user we want to add.
   * Empty if non-existent client is being added.
   *
   * @post get
   * @var string
   */
  public $text_business_uid_key = '';

  /**
   * Error message.
   * `null` if there was no mistake.
   *
   * @field message
   * @get result
   * @post result
   * @var string|null
   */
  public $text_message;

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
   * If empty, an empty form will be displayed to add a new user.
   *
   * @get get
   * @post get,result
   * @put get
   * @var string
   */
  public $uid = '';

  /**
   * The UID of an existing user in another business to add to the current business.
   *
   * @post get
   * @var string
   */
  public $uid_existed = '';

  /**
   * UID of the user, whose email was inherited by the existing client we want to add.
   * Empty if non-existent user is being added or user to add is the one, whose email is inherited.
   *
   * @post get
   * @var string
   */
  public $uid_relative_key = '';
}

?>