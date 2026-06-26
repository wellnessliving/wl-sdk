<?php

namespace WellnessLiving\Wl\Field\Config;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Field\WlFieldTypeSid;

/**
 * Endpoint for operations with field.
 *
 * @method WlModelRequest delete() Remove field.
 * @method WlModelRequest get() Fetch field information.
 * @method WlModelRequest post() Creates or updates field.
 */
class FieldModel extends WlModelAbstract
{
  /**
   * List of items for dropdown and select fields.
   *
   * @get result
   * @post post
   * @var array|null
   */
  public $a_field_item = null;

  /**
   * List of value for item.
   *
   * @post post
   * @var array|null
   */
  public $a_field_item_value = null;

  /**
   * Whether new field item can be added.
   *
   * @get result
   * @var bool
   */
  public $can_add_item = true;

  /**
   * Whether default value can be set for the field.
   *
   * @get result
   * @var bool
   */
  public $can_default = true;

  /**
   * `true` if field can be removed, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_remove = false;

  /**
   * `true` if field can be sorted, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_sort = false;

  /**
   * `true` if for field can change active state, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_state = false;

  /**
   * Size of the text input.
   *
   * Sets only when field has {@link WlFieldTypeSid::TEXT} type.
   *
   * @get result
   * @post post
   * @var int|null
   */
  public $i_size = null;

  /**
   * Field table ID.
   *
   * @delete get
   * @get get
   * @post get
   * @var int
   */
  public $id_field_table = 0;

  /**
   * Field type ID.
   *
   * @get result
   * @post post
   * @var int
   * @see WlFieldTypeSid
   */
  public $id_field_type = 0;

  /**
   * `true` if field is active, `false` otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_active = false;

  /**
   * `true` if a field is required during booking or purchase;
   * `false` if a field is not require during booking or purchase;
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_booking_and_purchase = false;

  /**
   * `true` if setting "Display during booking/purchase" is disabled, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_booking_and_purchase_disable = false;

  /**
   * `true` if display this field to franchisee, `false` otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_franchisee_display = false;

  /**
   * `true` if field is public, `false` otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_public = false;

  /**
   * `true` if setting "Visible to clients" is disabled, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_public_disable = false;

  /**
   * `true` if a field is required on sign up;
   * `false` if a field is not require on sign up;
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_registration = false;

  /**
   * `true` if setting "Display on sign-up" disabled, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_registration_disable = false;

  /**
   * `true` if field is required by client, `false` otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_require = false;

  /**
   * `true` if setting "Required by clients" is disabled, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_require_disable = false;

  /**
   * `true` if field is required by staff, `false` otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_require_staff = false;

  /**
   * `true` if setting "Required by staff" is disabled, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_require_staff_disable = false;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Field key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string
   */
  public $k_field = '';

  /**
   * Maximum value of field.
   *
   * @post post
   * @var string|null
   */
  public $s_max_value = '';

  /**
   * Default value for field.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_default = '';

  /**
   * Name of the field.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>