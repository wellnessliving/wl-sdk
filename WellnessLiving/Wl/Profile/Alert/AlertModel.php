<?php

namespace WellnessLiving\Wl\Profile\Alert;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about client alert messages.
 */
class AlertModel extends WlModelAbstract
{
  /**
   * A list of alerts. Every element is an array with the following keys:
   *
   * @get result
   * @var array[]
   */
  public $a_alert;

  /**
   * A list of warnings. Every element is an array with the following keys:
   *
   * @get result
   * @var array[]
   */
  public $a_warning;

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>