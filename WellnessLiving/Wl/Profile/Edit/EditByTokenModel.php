<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Field\WlFieldTypeSid;

/**
 * An endpoint that displays client profile information.
 * Version of {@link EditModel} for access validation by security token.
 */
class EditByTokenModel extends WlModelAbstract
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
  public $a_error_list = null;

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
   * A copy of the {@link \WellnessLiving\Wl\Profile\Edit\EditModel::$a_change}.
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
   *   <dd>The ID of a system field. One of {@link \WellnessLiving\Wl\Field\WlFieldGeneralSid} constants. This value is only defined if
   *   <var>id_field_type</var>={@link \WellnessLiving\RsFieldTypeSid::GENERAL}.</dd>
   *   <dt>bool <var>is_require</var></dt>
   *   <dd>Indicates whether the value of this field is required. This will be `1` if required or `0` if the field is optional.</dd>
   *   <dt>int <var>id_field_type</var></dt>
   *   <dd>The type of field. This is one of the {@link \WellnessLiving\Wl\Field\WlFieldTypeSid} constants.</dd>
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
   * ID of registration source. One of {@link \WellnessLiving\Wl\Profile\RegisterSourceSid} constants.
   * If empty {@link \WellnessLiving\Wl\Profile\RegisterSourceSid::SELF} is used.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_register_source = 0;

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
   * <tt>true</tt> to sing in a created user; <tt>false</tt> to not sign in.
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
   * Exception class name.
   * `null` if there was no mistake.
   *
   * @field class
   * @get result
   * @post result
   * @var string|null
   */
  public $s_class = null;

  /**
   * Code of the error.
   * `null` if there was no mistake.
   *
   * @field code
   * @get result
   * @post result
   * @var string|null
   */
  public $s_code = null;

  /**
   * Status of the request.
   * `null` if there was no mistake.
   *
   * @field status
   * @post result
   * @var string|null
   */
  public $s_status = null;

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
  public $text_message = null;

  /**
   * The password to be set for a new user.
   *
   * @post post
   * @var string
   */
  public $text_password = '';

  /**
   * The security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '';

  /**
   * The key of the user to edit.
   *
   * If empty, then an empty form will be displayed to add a new user.
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