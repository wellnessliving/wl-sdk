<?php

namespace WellnessLiving\Wl\Classes\ClassView;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a class element.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Displays information about the class schedule(s). Each element has the next structure:
   *
   * @get result
   * @var array[]
   */
  public $a_class_list = [];

  /**
   * The image height in pixels. Specify this value if you need the image to be returned in a specific size.
   * If this value isn't specified, the returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * The image width in pixels. Specify this value if you need the image to be returned in a specific size.
   * If this value isn't specified, the returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The class key used to get information for a specific class.
   *
   * An empty value returns information for all classes of the business.
   *
   * @get get
   * @var string
   */
  public $k_class = '';

  /**
   * Defines if canceled schedules should be included in the result.
   *
   * If `true`, canceled schedules will be shown. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $show_cancelled = false;
}

?>