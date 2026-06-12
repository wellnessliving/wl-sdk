<?php

namespace WellnessLiving\Wl\Classes\ClassList;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint to get all the classes for a location.
 */
class BookListModel extends WlModelAbstract
{
  /**
   * The class list. Every element has the following structure:
   *
   * @get result
   * @var array[]
   */
  public $a_class;

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
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>