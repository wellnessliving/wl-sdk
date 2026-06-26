<?php

namespace WellnessLiving\Wl\Staff\PayRate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to work with staff pay rate.
 *
 * @method WlModelRequest delete() Deletes staff pay rate.
 * @method WlModelRequest post() Adds new or edits exists staff pay rate.
 * @method WlModelRequest put() Sets the specified pay rate as default for the staff.
 */
class ItemModel extends WlModelAbstract
{
  /**
   * Additional data about staff pay rate. Contains different data depending on the type {@link ItemModel::$id_staff_pay}.
   *
   * @post post
   * @var array
   */
  public $a_data = [];

  /**
   * Type of the staff pay rate.
   * Required for adding new staff pay rates.
   *
   * @post post
   * @var int
   */
  public $id_staff_pay = 0;

  /**
   * Whether the pay rate should be used as default commission rate for the staff.
   *
   * `null` in case when don't need change this field.
   *
   * @post post
   * @put post
   * @var bool|null
   */
  public $is_commission_default = null;

  /**
   * Whether the pay rate should be used as default for the staff.
   *
   * `null` in case when don't need change this field.
   *
   * @post post
   * @put post
   * @var bool|null
   */
  public $is_default = null;

  /**
   * Whether the pay rate should be used as hourly default for the staff.
   *
   * `null` in case when don't need change this field.
   *
   * @post post
   * @put post
   * @var bool|null
   */
  public $is_hour_default = null;

  /**
   * Whether pay rate should be applied to calculate staff load.
   * Used with <var>id_staff_pay</var>
   *
   * @post post
   * @var bool
   */
  public $is_report = false;

  /**
   * Key of business.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   * This is a location where pay rate can be used for a staff load. If empty then pay rate can be used in any location.
   * Used only for pay rates with <var>id_staff_pay</var>
   *
   * @post post
   * @var string
   */
  public $k_location = '';

  /**
   * Key of staff pay rate.
   * Empty if you need to add new pay rate.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $k_staff_pay = '';

  /**
   * Title of the pay rate.
   *
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * Key of user staff.
   * Required for adding new staff pay rates.
   *
   * @post post
   * @var string
   */
  public $uid_staff = '';
}

?>