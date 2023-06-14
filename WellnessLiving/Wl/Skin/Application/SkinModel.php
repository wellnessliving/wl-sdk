<?php

namespace WellnessLiving\Wl\Skin\Application;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves customized skin settings for the client view.
 */
class SkinModel extends WlModelAbstract
{
  /**
   * Skin information.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_skin = null;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>