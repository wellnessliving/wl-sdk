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
   * <dl>
   *   <dt>array <var>a_class_tab</var></dt>
   *   <dd>The list of tab keys for the class.</dd>
   *
   *   <dt>string <var>dtu_book_date</var></dt>
   *   <dd>The book date of an event in UTC date/time format. Can be empty string if user cannot book the event.</dd>
   *
   *   <dt>bool <var>is_active</var></dt>
   *   <dd>This will be <tt>true</tt> if the class is active. Otherwise, this will be <tt>false</tt>.</dd>
   *
   *   <dt>bool <var>is_event</var></dt>
   *   <dd>This will be <tt>true</tt> for events. Otherwise, this will be <tt>false</tt> for classes.</dd>
   *
   *   <dt>sting <var>k_class</var></dt>
   *   <dd>The class key.</dd>
   *
   *   <dt>sting <var>k_enrollment_block</var></dt>
   *   <dd>The enrollment block key.</dd>
   *
   *   <dt>string <var>m_price_total</var></dt>
   *   <dd>The total price for an event.</dd>
   *
   *   <dt>sting <var>text_description</var></dt>
   *   <dd>The class description.</dd>
   *
   *   <dt>sting <var>text_title</var></dt>
   *   <dd>The class name.</dd>
   * </dl>
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