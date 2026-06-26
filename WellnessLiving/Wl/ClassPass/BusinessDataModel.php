<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns information about a partners.
 *
 * Dispatched URL: <tt>/cp/v1/partners/{partner_id}</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class BusinessDataModel extends WlModelAbstract
{
  /**
   * Information about partner
   *
   * @field partner
   * @get result
   * @var array
   */
  public $a_partner;

  /**
   * Partner ID.
   *
   * @get get
   * @var string
   */
  public $s_partner;
}

?>