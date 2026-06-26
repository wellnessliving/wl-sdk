<?php

namespace WellnessLiving\Core\Search\Autoscaling;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Set the new required number of instances in the cluster
 *
 * @method WlModelRequest post() Set the number of PostgreSQL instances for search index.
 */
class AutoscalingSizeModel extends WlModelAbstract
{
  /**
   * @post post
   * @var int
   */
  public $cid_table = 0;

  /**
   * New number of instances.
   *
   * @post post
   * @var int
   */
  public $i_want = 0;

  /**
   * Name of the search provider configuration.
   *
   * @post post
   * @var string
   */
  public $s_provider = '';
}

?>