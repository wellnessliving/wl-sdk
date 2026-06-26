<?php

namespace WellnessLiving\Studio\SeleniumCluster;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * A class to work with selenium servers.
 *
 * @method WlModelRequest get() Gets a list of clusters and servers.
 * @method WlModelRequest post() Actions with the servers.
 */
class SeleniumClusterModel extends WlModelAbstract
{
  /**
   * Information about clusters and count of reserved browsers for each cluster.
   *
   * <dl>
   *   <dt>int `i_server_count`</dt>
   *   <dd>Number of reserved browsers.</dd>
   * 
   *   <dt>string `text_testing_cluster`</dt>
   *   <dd>Test cluster identifier.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_cluster = null;

  /**
   * Information about servers.
   *
   * <dl>
   *   <dt>int `i_count_active`</dt>
   *   <dd>Number of active browsers.</dd>
   * 
   *   <dt>int `i_count_all`</dt>
   *   <dd>Number of active+passive browsers.</dd>
   * 
   *   <dt>int `i_count_failed`</dt>
   *   <dd>Number of failed browsers.</dd>
   * 
   *   <dt>int `i_count_ready`</dt>
   *   <dd>Number of passive browsers.</dd>
   * 
   *   <dt>int `i_count_starting`</dt>
   *   <dd>Number of starting browsers.</dd>
   * 
   *   <dt>int `id_state`</dt>
   *   <dd>
   *     Selenium instance state.
   *
   *   </dd>
   * 
   *   <dt>string|null `ip_private`</dt>
   *   <dd>
   *     Private IP address of the Selenium server.
   *   <tt>null</tt> if <var>id_state</var>
   *   </dd>
   * 
   *   <dt>string|null `ip_public`</dt>
   *   <dd>
   *     Public IP address of the Selenium server.
   *   <tt>null</tt> if <var>id_state</var>
   *   </dd>
   * 
   *   <dt>string `k_web_emulator_server`</dt>
   *   <dd>
   *     Key of selenium server.
   *
   *   </dd>
   * 
   *   <dt>string `s_server`</dt>
   *   <dd>The Amazon EC2 instance ID.</dd>
   * 
   *   <dt>string `text_state`</dt>
   *   <dd>
   *     Selenium instance state title.
   *
   *   </dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_server = null;

  /**
   * Server action id.
   *
   * @post post
   * @var int
   */
  public $id_action = 0;

  /**
   * Is automatic server management disabled.
   *   When `true` - automatic server management will be disabled.
   *   When `false` - automatic server management will be enabled.
   *
   * @post post
   * @var bool|null
   */
  public $is_auto_disable = null;

  /**
   * The Amazon EC2 instance ID.
   *
   * @post post
   * @var string|null
   */
  public $s_server = null;
}

?>