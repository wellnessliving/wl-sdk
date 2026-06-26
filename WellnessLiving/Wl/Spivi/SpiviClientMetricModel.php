<?php

namespace WellnessLiving\Wl\Spivi;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * This API returns the link to the Spivi widget to display the history list and class performance of the client
 * in an iFrame.
 *
 * The link is available only if:
 * * The client has attended a class at the location where Spivi is enabled.
 * * The client has a unique email address in WellnessLiving. Clients who share the same email address across multiple
 *   accounts will not have access to this feature.
 *
 * @method WlModelRequest get()
 */
class SpiviClientMetricModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid_client = '';

  /**
   * URL to the Spivi widget for the client.
   *
   * @get result
   * @var string
   */
  public $url_widget = '';
}

?>