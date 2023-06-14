<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays client profile information.
 * This endpoint is for validation by a token.
 */
class EditByTokenModel extends WlModelAbstract
{
  /**
   * The values and structures of all the fields. Keys are field keys (`k_field`).
   * These are required array keys. The values are in the following format:
   * <dl>
   *   <dt>
   *     int [<var>id_field_general</var>]
   *   </dt>
   *   <dd>
   *     The ID of a system field. One of {@link \WellnessLiving\Wl\Field\WlFieldGeneralSid} constants.
   *     This value is only defined if <var>id_field_type</var>=
   *     {@link \WellnessLiving\Wl\Field\WlFieldTypeSid::GENERAL}.
   *   </dd>
   *   <dt>
   *     bool <var>is_require</var>
   *   </dt>
   *   <dd>
   *     Determines whether the value of this field is required. This will be `1` if required or `0` if the field is
   *     optional.
   *   </dd>
   *   <dt>
   *     int <var>id_field_type</var>
   *   </dt>
   *   <dd>
   *     The type of the field. One of {@link \WellnessLiving\Wl\Field\WlFieldTypeSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_field</var>
   *   </dt>
   *   <dd>
   *     The field key.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The title of the field.
   *   </dd>
   *   <dt>
   *     mixed <var>x_value</var>
   *   </dt>
   *   <dd>
   *     The value of the field. This value depends on the type of the field in question.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_structure = [];

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
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>