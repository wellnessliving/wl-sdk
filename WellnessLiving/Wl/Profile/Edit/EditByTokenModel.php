<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Client profile information.
 * Version for validation by token.
 */
class EditByTokenModel extends WlModelAbstract
{
  /**
   * Values and structure of all fields. Keys are field keys (<tt>k_field</tt>).
   * Values are field values and structure, arrays with the following keys:
   * <dl>
   *   <dt>
   *     int [<var>id_field_general</var>]
   *   </dt>
   *   <dd>
   *     ID of a system field. One of {@link \WellnessLiving\Wl\Field\WlFieldGeneralSid} constants.
   *     This value is only defined if <var>id_field_type</var>=
   *     {@link \WellnessLiving\Wl\Field\RsFieldTypeSid::GENERAL}.
   *   </dd>
   *   <dt>
   *     bool <var>is_require</var>
   *   </dt>
   *   <dd>
   *     Whether value of this field is required. '1' if required, '0' if field is optional.
   *   </dd>
   *   <dt>
   *     int <var>id_field_type</var>
   *   </dt>
   *   <dd>
   *     Type of the field. One of {@link \WellnessLiving\Wl\Field\RsFieldTypeSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_field</var>
   *   </dt>
   *   <dd>
   *     Field key.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Title of the field.
   *   </dd>
   *   <dt>
   *     mixed <var>x_value</var>
   *   </dt>
   *   <dd>
   *     Value of the field. This value is completely defined by individual fields.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_structure = [];

  /**
   * Security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '';

  /**
   * Key of a user to manipulate with.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>