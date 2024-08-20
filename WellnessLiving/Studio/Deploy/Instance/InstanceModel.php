<?php

namespace WellnessLiving\Studio\Deploy\Instance;

use WellnessLiving\WlModelAbstract;

/**
 * Manage `Studio Deploy Instance`.
 */
class InstanceModel extends WlModelAbstract
{
  /**
   * List of `Project Role`.
   *
   * @post post
   * @var string[]|null
   */
  public $a_role = null;

  /**
   * List of tags.
   *
   * @post post
   * @var string[]|null
   */
  public $a_tag = null;

  /**
   * Allow users to start builds manually by clicking a button.
   *
   * @post post
   * @var bool|null
   */
  public $is_button = null;

  /**
   * Run build automatically upon commit.
   *
   * @post post
   * @var bool|null
   */
  public $is_commit = null;

  /**
   * Allow multiple commits to wait in the build queue.
   * If not allowed, then only a single (the last one) commit may wait in the queue.
   *
   * @post post
   * @var bool|null
   */
  public $is_queue = null;

  /**
   * Indicates if instance set as removed.
   *
   * @post post
   * @var bool|null
   */
  public $is_remove = null;

  /**
   * The key of `Studio Amazon Account`.
   *
   * @post post
   * @var string|null
   */
  public $k_amazon_account = null;

  /**
   * The key of `Studio Deploy Instance`.
   *
   * @delete get
   * @post post,result
   * @var string|null
   */
  public $k_deploy_instance = null;

  /**
   * The key of `Studio Project`
   *
   * @post post
   * @var string|null
   */
  public $k_project = null;

  /**
   * The name of `Studio Deploy Instance`.
   *
   * @post post
   * @var string|null
   */
  public $s_deploy_instance = null;

  /**
   * The value contains a list of repository path.
   *
   * @post post
   * @var string|null
   */
  public $s_path = null;

  /**
   * The value contains a list of variables.
   *
   * @post post
   * @var string|null
   */
  public $s_variable = null;
}

?>