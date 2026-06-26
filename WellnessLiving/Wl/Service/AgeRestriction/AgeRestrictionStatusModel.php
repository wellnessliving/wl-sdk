<?php

namespace WellnessLiving\Wl\Service\AgeRestriction;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Age restriction check API.
 *
 * @method WlModelRequest get() Checks if client can book class with age restrictions.
 */
class AgeRestrictionStatusModel extends WlModelAbstract
{
  /**
   * Whether a client can book class.
   *
   * @get result
   * @var bool
   */
  public $can_book;

  /**
   * Whether a client can book class.
   *
   * @get get
   * @var string
   */
  public $dtu_date = '';

  /**
   * Class period key.
   *
   * Empty value means not set.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '';

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>