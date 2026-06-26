<?php

namespace WellnessLiving\Wl\Zapier\LeadSource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to retrieve list of lead sources.
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
   * List of Lead Sources. Each element has the next structure: 
   *
   * <dl>
   *   <dt>int `id`</dt>
   *
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the Lead Source.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_lead_source = [];

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