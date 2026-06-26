<?php

namespace WellnessLiving\Studio\Repository\Access;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Updates personnel access to specific repository rule.
 *
 * @method WlModelRequest post()
 */
class AccessPersonnelModel extends WlModelAbstract
{
  /**
   * Whether given personnel has access to give rule.
   *
   * @post post
   * @var bool
   */
  public $has_access;

  /**
   * Repository access rule key.
   *
   * @post post
   * @var string
   */
  public $k_access_rule;

  /**
   * Studio personnel key.
   *
   * @post post
   * @var string
   */
  public $k_personnel;
}

?>