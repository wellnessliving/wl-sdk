<?php

namespace WellnessLiving\Wl\Insurance\Catalog;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of programs' information.
 */
class ProgramListModel extends WlModelAbstract
{
  /**
   * A List of active programs.
   * Every element has next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_wellness_program;

  /**
   * The key of the franchisee business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the promotion.
   *
   * @get get
   * @var string
   */
  public $k_promotion = '';
}

?>