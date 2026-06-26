<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Generate new member's ids if those are empty.
 *
 * @method WlModelRequest post()
 */
class GenerateIdModel extends WlModelAbstract
{
  /**
   * User's ids.
   *
   * @post post
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Amount of generated users ids.
   *
   * @post result
   * @var int
   */
  public $i_amount = 0;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';
}

?>