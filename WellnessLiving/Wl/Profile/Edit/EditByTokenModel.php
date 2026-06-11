<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;
use WellnessLiving\Wl\Field\WlFieldGeneralSid;
use WellnessLiving\Wl\Field\WlFieldTypeSid;
use WellnessLiving\Wl\Login\Member\MemberIntentsSid;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Profile\RegisterSourceSid;

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
   * List of validation errors. `null` if no error occurred.
   * Each element: <dl>
   *   <dt>string `code`</dt>
   *   <dd>Error code identifying the type of validation failure.</dd>
   *   <dt>string `field`</dt>
   *   <dd>Field identifier that caused the error.</dd>
   *   <dt>string `message`</dt>
   *   <dd>Human-readable error message.</dd>
   * </dl>
   *
   * @get result,error
   * @post result,error
   * @var array[]|null
   */
  public $a_error_list = null;

  /**
   * Family relation data for the newly created user.
   * `null` if no family relation is required: <dl>
   *   <dt>int `id_family_relation`</dt>
   *   <dd>Relation type. One of {@link WlFamilyRelationSid} constants.</dd>
   *
   *   <dt>bool [`is_relative_pay`]</dt>
   *   <dd>`true` if the relative will pay for this user; `false` or absent otherwise.</dd>
   *
   *   <dt>string `uid_from`</dt>
   *   <dd>
   *     User key of the relative (must be the currently logged-in user).
   *        </dd>
   * </dl>
   *
   * @post post
   * @var array|null
   */
  public $a_family_relation = null;

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
   * List of intent identifiers. Each element is one of {@link MemberIntentsSid} constants.
   *
   * Available only for leads added by CAASI agent.
   *
   * @post post
   * @put post
   * @var int[]
   */
  public $a_intents = [];

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
   *   <dt>bool [`is_phone_inherit`]</dt>
   *   <dd>Indicates weather to inherit phone numbers from relative or not. `1` if phone inheritance is needed, '0' otherwise.</dd>
   *   <dt>string [`text_relative`]</dt>
   *   <dd>Relative's name.</dd>
   *   <dt>string `uid_relative`</dt>
   *   <dd>User key of relative.</dd>
   * </dl>
   *
   * @get result
   * @post post
   * @put post
   * @var array
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
   * Whether current user can change password of the given user or not.
   * If client is part of multiple businesses, then staff of the business can only request reset of the password,
   * but cannot change it.
   *
   * @get result
   * @var bool
   */
  public $can_password_change = false;

  /**
   * ID of source mode. One of {@link ModeSid} constants.
   *
   * @post get
   * @var int|null
   */
  public $id_mode = null;

  /**
   * Registration source ID.
   * One of {@link RegisterSourceSid} constants.
   *
   * Used only to register new clients.
   * * If the client is already authorized, the field value will not be used.
   * * If the client is not authorized and no value is set, {@link RegisterSourceSid::SELF} will be used.
   *
   * 
   * @get get
   * @post get
   * @put get
   * @var int|null
   */
  public $id_register_source = null;

  /**
   * `true` if the A2P 10DLC registration feature is enabled for this business, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_a2p;

  /**
   * Whether the address be inherited.
   * `true` if address inherit, otherwise `false`.
   *
   * @get result
   * @post get
   * @put get
   * @var bool
   */
  public $is_address_inherit = false;

  /**
   * `true` to throw an exception in a case of validation error; `false` to not throw.
   *
   * @post post
   * @var bool
   */
  public $is_exception_throw = false;

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
   * <tt>true</tt> - user agreed to receive marketing SMS;
   * <tt>false</tt> - otherwise.
   *
   * Only matters if {@link EditModel::$is_sms_subscription_presented} is `true`.
   *
   * @post post
   * @var bool
   */
  public $is_sms_subscription_marketing = false;

  /**
   * <tt>true</tt> - user was shown checkboxes to subscribe to marketing and transactional sms messages.
   *   This means we need to modify his subscription based on the values in these fields.
   * <tt>false</tt> - otherwise. This means we should not change subscription settings.
   *
   * @post post
   * @var bool
   */
  public $is_sms_subscription_presented = false;

  /**
   * <tt>true</tt> - user agreed to receive transactional SMS;
   * <tt>false</tt> - otherwise.
   *
   * Only matters if {@link EditModel::$is_sms_subscription_presented} is `true`.
   *
   * @post post
   * @var bool
   */
  public $is_sms_subscription_transactional = false;

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
   * Key of the lead source.
   *
   * `null` if not defined.
   *
   * When creating or editing a user:
   *
   * @get result
   * @post get
   * @put get
   * @var string|null
   */
  public $k_lead_source = null;

  /**
   * Exception class name.
   * `null` if there was no mistake.
   *
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
   * Compound key delimited with a colon. First part is the business key where the selected client exists.
   * Second part is the uid of the already existing user we want to add. Empty if a non-existent client is being added.
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
   * UID of the user, whose address was inherited by the existing client we want to add.
   * Empty if non-existent user is being added or user to add is the one, whose address is inherited.
   * `null` If the address is not inherited.
   *
   * @get result
   * @post get
   * @put get
   * @var string|null
   */
  public $uid_inherit_address = null;

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