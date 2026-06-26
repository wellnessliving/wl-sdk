<?php

namespace WellnessLiving\Wl\Quiz\Element\ImageMarkup;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint to load and edit image markup user configuration.
 *
 * @method WlModelRequest get() Gets stored image markup configuration.
 * @method WlModelRequest post() Updates stored image markup configuration.
 */
class ImageMarkupConfigModel extends WlModelAbstract
{
  /**
   * Key of business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Last used marker configuration (style parameters) for the stored marker tool.
   * `null` if not initialized yet. `array` for compatibility with JavaScript.
   *
   * @field a_marker_config
   * @get result
   * @post post
   * @var MarkerConfigEntity|array|null
   */
  public $o_marker_config = null;

  /**
   * Last selected marker tool type.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_marker_type = '';

  /**
   * User key to bind configuration to a specific user.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>