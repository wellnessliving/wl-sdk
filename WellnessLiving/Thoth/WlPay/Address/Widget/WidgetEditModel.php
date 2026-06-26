<?php

namespace WellnessLiving\Thoth\WlPay\Address\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to get data for "edit payment address" widget.
 *
 * @method WlModelRequest get() Gets data for "edit payment address" widget.
 */
class WidgetEditModel extends WlModelAbstract
{
  /**
   * List of possible regions.
   *
   * @get result
   * @var array[]
   */
  public $a_geo;

  /**
   * Mask for phone entering (ready for output to the page).
   *
   * @get result
   * @var string
   */
  public $html_phone_mask;

  /**
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Mask for phone entering.
   *
   * @get result
   * @var string
   */
  public $text_phone_mask;
}

?>