<?php

namespace WellnessLiving\Wl\Contact\Type;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads a list of custom contact types.
 *
 * @method WlModelRequest get()
 */
class ContactTypeListModel extends WlModelAbstract
{
  /**
   * List of contact types.
   *
   * @get result
   * @var array
   */
  public $a_contact_type = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>