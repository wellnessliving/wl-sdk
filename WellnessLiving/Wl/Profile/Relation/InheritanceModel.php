<?php

namespace WellnessLiving\Wl\Profile\Relation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Field\WlFieldGeneralSid;

/**
 * Api for inheritance details.
 *
 * @method WlModelRequest get() Gets full list of ranks owned by the client.
 */
class InheritanceModel extends WlModelAbstract
{
  /**
   * Type of the field. One of {@link WlFieldGeneralSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_field_general = 0;

  /**
   * `true` if API is being used from backend, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Text representation of relative's address.
   *
   * @get result
   * @var string
   */
  public $text_address = '';

  /**
   * Text representation of relative's cell phone number.
   *
   * @get result
   * @var string
   */
  public $text_cell_phone = '';

  /**
   * Text representation of relative's city.
   *
   * @get result
   * @var string
   */
  public $text_city = '';

  /**
   * Text representation of relative's city's key for combobox.
   *
   * @get result
   * @var string
   */
  public $text_city_key = '';

  /**
   * Text representation of relative's home phone number.
   *
   * @get result
   * @var string
   */
  public $text_home_phone = '';

  /**
   * Text representation of relative's email address.
   *
   * @get result
   * @var string
   */
  public $text_mail = '';

  /**
   * Text representation of relative's postal code.
   *
   * @get result
   * @var string
   */
  public $text_postal = '';

  /**
   * Text representation of relative's work phone number.
   *
   * @get result
   * @var string
   */
  public $text_work_phone = '';

  /**
   * User's key. `null` if not specified.
   *
   * @get get
   * @var string|null
   */
  public $uid = '';

  /**
   * Relative's User key.
   *
   * @get get
   * @var string
   */
  public $uid_relative = '';
}

?>