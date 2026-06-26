<?php

namespace WellnessLiving\Core\Search\Autoscaling;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**/
class AutoscalingSuspendModel extends WlModelAbstract
{
  /**
   * @delete post
   * @post post
   * @var int
   */
  public $cid_table = 0;

  /**
   * Name of the search provider configuration.
   *
   * @delete post
   * @post post
   * @var string
   */
  public $s_provider = '';

  /**
   * Comment of suspension of autoscaling activities.
   *
   * @post post
   * @var string
   */
  public $s_where = '';
}

?>