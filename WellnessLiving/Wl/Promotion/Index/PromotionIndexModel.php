<?php

namespace WellnessLiving\Wl\Promotion\Index;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Gets a list of introductory promotion offers of a specified type available at a given location.
 */
class PromotionIndexModel extends WlModelAbstract
{
  /**
   * A list of introductory promotion offers available at the location.
   * Every element is an array with the following keys:
   *
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The program type ID, which will be one of the {@link WlProgramTypeSid} constants.
   *
   * `0` to not filter Purchase Options with type of the Purchase Option.
   *
   * @get get
   * @var int
   */
  public $id_program_type = 0;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>