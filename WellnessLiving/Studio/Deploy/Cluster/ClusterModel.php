<?php

namespace WellnessLiving\Studio\Deploy\Cluster;

use WellnessLiving\WlModelAbstract;

/**
 * Manage `Studio Deploy Cluster`.
 */
class ClusterModel extends WlModelAbstract
{
  /**
   * SSH port number that should be used by compilation server to connect instance servers.
   *
   * @post post
   * @var int|null
   */
  public $i_port = null;

  /**
   * Whether this deployment cluster is active.
   *
   * @post post
   * @var int|null
   */
  public $is_active = null;

  /**
   * Key of the cluster being saved.
   *
   * @post post,result
   * @var string|null
   */
  public $k_deploy_cluster = null;

  /**
   * ID of deployment server that serves this cluster.
   *
   * @post post
   * @var string|null
   */
  public $k_deploy_compile = null;

  /**
   * `Deploy Instance` ID.
   *
   * @post post
   * @var string|null
   */
  public $k_deploy_instance = null;

  /**
   * Cluster description contains either amazon security group id.
   *
   * @post post
   * @var string|null
   */
  public $s_cluster = null;

  /**
   * Name of this deployment cluster.
   *
   * @post post
   * @var string|null
   */
  public $s_deploy_cluster = null;

  /**
   * Private key to access all instances of cluster over SSH under control user.
   *
   * @post post
   * @var string|null
   */
  public $s_key_control = null;

  /**
   * Private key to access all instances of cluster over SSH under instance user.
   *
   * @post post
   * @var string|null
   */
  public $s_ssh = null;

  /**
   * Name of instance user.
   *
   * @post post
   * @var string|null
   */
  public $s_user = null;

  /**
   * Name of control user.
   *
   * @post post
   * @var string|null
   */
  public $s_user_control = null;
}

?>