<?php

namespace WellnessLiving\Wl\Log;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieve log data.
 *
 * @method WlModelRequest get() Retrieves log data in html format.
 */
class LogBusinessDataModel extends WlModelAbstract
{
  /**
   *
   * <dl>
   *   <dt>string `html_template`</dt>
   *   <dd>Log data template.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_template;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Log key.
   *
   * @get get
   * @var string
   */
  public $k_log = '';
}

?>