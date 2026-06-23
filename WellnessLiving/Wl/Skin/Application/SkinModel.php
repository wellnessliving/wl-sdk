<?php

namespace WellnessLiving\Wl\Skin\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves customized skin settings for the client view.
 *
 * @method WlModelRequest delete() Reset customisation form of client application.  Resets the Achieve app customization skin to default values for the given business. If billing is required for the reset, a confirmation flag must be provided, and a customization fee may be scheduled.
 * @method WlModelRequest get() Returns the application customisation skin data for the given business.  Returns the full set of White Label Achieve app customization settings (colors, logos, fonts, and other branding options) for the given business, along with a flag indicating whether the business account has an active paid customization subscription.
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