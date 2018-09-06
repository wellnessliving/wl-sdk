<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Client profile information.
 */
class EditModel extends WlModelAbstract
{
  /**
   * Field values to save.
   *
   * Keys are field IDs.
   *
   * Values are new field values. Specific values depend on individual type of field. For some fields, there may be a string, for some fields there may be an array.
   *
   * If a composite field is changed, all fields should be specified (for example, if you change address you should obligatorily specify city).
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
   * Field values already saved.
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
   * Values and structure of all fields. Keys are field ids (<tt>k_field</tt>).
   *   Values are field values and structure, arrays with the following structure:<ul>
   *   <li>int [<tt>id_field_general</tt>] ID of a system field. One of {@link RsFieldGeneralSid} constants.
   *
   *     This value is only defined if <tt>id_field_type</tt>={@link RsFieldTypeSid.GENERAL}.</li>
   *   <li>Boolean <tt>is_require</tt> Whether value of this field is required. '1' if required, '0' if field is optional.</dd>
   *   <li>int <tt>id_field_type</tt> Type of the field. One of {@link RsFieldTypeSid} constants.</li>
   *   <li>String <tt>k_field</tt> Field ID (<tt>k_field</tt>). Copy of key of this array element.</li>
   *   <li>string <tt>s_title</tt> Title of the field.</li>
   *   <li>mixed <tt>x_value</tt> Value of the field. This value is completely defined by individual fields.</li>
   * </ul>
   *
   * @get result
   * @var array
   */
  public $a_structure = [];

  /**
   * The form display mode. Short or full.
   * Assumes use only in user registration mode.
   *
   * @get get
   * @get result
   * @post get
   * @var bool
   */
  public $is_short = 0;

  /**
   * How we want to see this page. As a staff or as a user.
   *
   * @get get
   * @post get
   * @put get
   * @var bool
   */
  public $is_staff = 0;

  /**
   * ID of a business to manipulate with.
   *
   * Empty value to manipulate with system-wide fields.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * ID of a user to manipulate with.
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