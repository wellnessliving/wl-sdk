<?php

namespace WellnessLiving\Wl\Skin;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsSkinSid;

/**
 * Retrieves skin settings for customisation of client application.
 *
 * @method WlModelRequest get() Gets skin data.
 * @method WlModelRequest post() Saves the specified skin fields.
 */
class SkinModel extends WlModelAbstract
{
  /**
   * Skin fields to save.
   * Key is full name of the skin field, it is separated string containing field name and element name from
   *
   * Value is new field value.
   *
   * @post post
   * @var array
   */
  public $a_field;

  /**
   * Skin data.
   *
   * @get result
   * @var array
   */
  public $a_skin;

  /**
   * Skin type, one of {@link RsSkinSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_skin;

  /**
   * Skin key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_skin = '0';

  /**
   * URL to the main page of the widget.
   *
   * @get result
   * @var string
   */
  public $url_skin;
}

?>