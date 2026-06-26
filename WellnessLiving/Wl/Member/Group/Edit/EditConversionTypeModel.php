<?php

namespace WellnessLiving\Wl\Member\Group\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to add or change a client group.
 *
 * @method WlModelRequest delete() Removes the lead conversion record.
 * @method WlModelRequest put() Adds or changes a lead conversion type for the client.
 */
class EditConversionTypeModel extends WlModelAbstract
{
  /**
   * Lead conversion type.
   * `null` if this is the request to reset conversion date.
   *
   * @put post
   * @var int|null
   */
  public $id_conversion_type = null;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * User key.
   *
   * Used to set lead conversion type for the user.
   *
   * @delete get
   * @put get
   * @var string|null
   */
  public $uid = null;
}

?>