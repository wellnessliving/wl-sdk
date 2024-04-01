<?php

namespace WellnessLiving\Wl\Skin\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves customized skin settings for the client view.
 */
class SkinModel extends WlModelAbstract
{
  /**
   * Skin information.
   *
   * @get result
   * @var array
   */
  public $a_skin;

  /**
   * Determines current business account contains amount for the application customisation.
   *
   * @get result
   * @var bool
   */
  public $has_pay;

  /**
   * Whether customization billing is confirmed.
   *
   * <tt>true</tt> to finish delete process even if customization fee will be billed.
   * <tt>false</tt> if customization fee should be required for confirmation.
   *
   * @delete get
   * @var bool
   */
  public $is_billing_confirm;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Name of the link to default application skin.
   *
   * @delete result
   * @get result
   * @var string
   */
  public $s_link;
}

?>