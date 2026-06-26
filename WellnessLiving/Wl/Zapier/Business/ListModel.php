<?php

namespace WellnessLiving\Wl\Zapier\Business;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint designed to retrieve list of businesses
 * available for current user within {@link https://zapier.com} integration.
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
   * List of businesses available for current user.
   *
   * @get result
   * @var array
   */
  public $a_business_list = [];
}

?>