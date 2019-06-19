<?php

namespace WellnessLiving\Wl\Skin\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Point to get skin settings for customisation of client application.
 */
class SkinModel extends WlModelAbstract
{
  /**
   * Skin information.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var array|null
   */
  public $a_skin = null;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>