<?php

namespace WellnessLiving\Wl\Profile\Term;

use WellnessLiving\WlModelAbstract;

/**
 * Information about online waiver.
 */
class TermModel extends WlModelAbstract
{
  /**
   * ID of current business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * ID of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>