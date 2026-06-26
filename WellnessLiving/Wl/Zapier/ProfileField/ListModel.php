<?php

namespace WellnessLiving\Wl\Zapier\ProfileField;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to retrieve list of profile field.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put()
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of profile field of the business.
   *
   * @get result
   * @var array
   */
  public $a_field_list = [];

  /**
   * Business key for which trigger/action is performed.
   *
   * @delete get
   * @get get
   * @patch get
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>