<?php

namespace WellnessLiving\Wl\Zapier\ClientGroup;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to retrieve list of member groups.
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
   * List of client groups of the business.
   *
   * @get result
   * @var array
   */
  public $a_client_group = [];

  /**
   * `true` if include auto-updated groups, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_include_update = false;

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